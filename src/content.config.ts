import { defineCollection } from 'astro:content';
import { z } from 'astro/zod';
import { file, glob } from 'astro/loaders';

const archives = defineCollection({
  loader: glob({
    pattern: '**/*.md',
    base: './src/content/archives'
  }),
  schema: z.object({
    title: z.string(),
    description: z.string(),
    date: z.coerce.date(),
    tags: z.array(z.string()).default([]),
    draft: z.boolean().optional().default(false),
    ogImage: z.string().optional()
  })
});

const link = z.object({
  label: z.string(),
  text: z.string(),
  url: z.string(),
});

// Talks and slides, edited only in src/content/presentations.yaml.
const presentations = defineCollection({
  loader: file('./src/content/presentations.yaml'),
  schema: z.object({
    title: z.string(),
    section: z.enum(['Paper presentations', 'Project presentations', 'Coursework']),
    // For papers: authors, venue, year.
    paper: z.string().optional(),
    // Other line under the title, for example the original title.
    subtitle: z.string().optional(),
    context: z.string(),
    supervisor: z.string().optional(),
    jury: z.string().optional(),
    date: z.string().optional(),
    description: z.string(),
    // Slides link; for project defenses it can come from the project in public/0user.json instead.
    slides: z.string().optional(),
    project: z.string().optional(),
    links: z.array(link).default([]),
    language: z.string().optional(),
  }).refine(
    // The OMPIC coursework is a drafting exercise, never a filed patent.
    (item) => !/patent/i.test(item.title) || item.title.startsWith('Patent drafting exercise'),
    { message: 'A title that mentions a patent must start with "Patent drafting exercise".' },
  ),
});

export const collections = { archives, presentations };
