<div align="center">
  <img src="banner.png" alt="Portfolio Banner" width="100%">
  
  # amranich.dev
  
  **My portfolio website is designed to showcase both my personality and skills as a software developer.**

  
  [![Deployment](https://img.shields.io/github/actions/workflow/status/AmraniCh/amranich.dev/deploy.yml?label=🚀%20Deployment&style=flat-square)](https://github.com/AmraniCh/amranich.dev/actions/workflows/deploy.yml)
  [![Version](https://img.shields.io/github/v/tag/amranich/amranich.dev?label=version&style=flat-square&color=success)](https://github.com/AmraniCh/amranich.dev/releases)
  [![License](https://img.shields.io/github/license/amranich/amranich.dev?style=flat-square)](LICENSE)

  [Visit Website](https://amranich.dev) • [View Changelog](CHANGELOG.md) • [Report Bug](https://github.com/AmraniCh/amranich.dev/issues)
</div>

---

## 🔗 Links

- **🌐 Live Website**: [amranich.dev](https://amranich.dev)
- **🎨 Design on Behance**: [View Design](https://www.behance.net/gallery/238174557/Personal-Portfolio-Website-V1-amranichdev)

## 🛠️ Tech Stack

**Frontend**
- [Jigsaw](https://jigsaw.tighten.co/) - Static site generator
- [Tailwind CSS](https://tailwindcss.com/) - Utility-first CSS framework
- Vanilla JavaScript - Canvas animations & interactions

**Backend**
- PHP 8.0 - Contact form processing
- [PHPMailer](https://github.com/PHPMailer/PHPMailer) - Email sending via SMTP

**Infrastructure**
- AWS EC2 (Debian) - Hosting
- nginx - as Web server
- vsftpd - FTP server with FTPS support
- GitHub Actions - CI/CD pipeline

## 🚀 Quick Start

### Prerequisites
- PHP 8.0+
- Composer
- Node.js 14+
- npm

### Installation

```bash
# Clone the repository
git clone https://github.com/AmraniCh/amranich.dev.git
cd amranich.dev

# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### Development

```bash
# Development server with hot reload
npm run watch

# One-time development build
npm run dev

# Production build
npm run prod
```

The site will be built in the `build_production` directory.

## 📁 Project Structure

```
amranich.dev/
├── source/           # Source files
│   ├── backend/      # PHP backend (contact form)
│   ├── css/          # Tailwind styles
│   ├── js/           # JavaScript files
│   ├── lang/         # Translations (en/fr)
│   └── _layouts/     # Jigsaw layouts
├── build_production/ # Production build output
└── .github/          # GitHub Actions workflows
```

## 🔧 Configuration

### Environment Variables

Create `.env` from `env.example`:

```bash
# Copy environment file
cp source/backend/env.example source/backend/.env
```

Update with your credentials:

```env
SMTP_FROM_ADDRESS=
SMTP_TO_ADDRESS=
SMTP_HOST=
SMTP_PORT=
SMTP_USERNAME=
SMTP_PASSWORD=
RECAPTCHA_SECRET=
```

## 🚀 Deployment

The project uses GitHub Actions for automated deployment via FTPS:

1. Push code or create a tag
2. GitHub Actions builds the project
3. Files are deployed via FTPS

See [`.github/workflows/deploy.yml`](.github/workflows/deploy.yml) for details.

## 📝 License

This project’s **code** is released under the [MIT License](LICENSE).

If you wish to use or adapt this project for your own website, please provide **proper attribution** by linking back to [amranich.dev](https://amranich.dev) or mentioning **AmraniCh** as the original author. I have put a lot of effort into this project, and I would sincerely appreciate it if you acknowledge that work by giving proper credit.

If you’re interested in building a similar website or need assistance, feel free to reach out at **contact@amranich.dev**. I’ll be happy to help.


## 🤝 Contributing

Contributions are welcome! Feel free to:
- Report bugs
- Suggest new features  
- Submit pull requests

---

<div align="center">
  Made with ❤️ by <a href="https://github.com/AmraniCh">AmraniCh</a>
  
  ⭐ **Star this repo if you find it interesting or helpful, thank you!**
</div>