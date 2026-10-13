// "NeuralCodec-RPi" -> "neuralcodec-rpi", used for #anchors on the projects page.
export function slug(text: string): string {
    return text.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '');
}
