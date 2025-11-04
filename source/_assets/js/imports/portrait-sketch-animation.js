export default function animatePortraitSketch() {
    const canvas = document.getElementById("canvas");
    const sourceImage = document.getElementById("sourceImage");

    // Early return if elements don't exist
    if (!canvas || !sourceImage) {
        console.warn("Canvas or source image not found for portrait animation");
        return;
    }

    const ctx = canvas.getContext("2d");
    let time = 0;
    let animationId;

    // Wave animation settings
    const waveSettings = {
        amplitude: 2,      // Wave weight (height)
        frequency: 2.2,    // Wave frequency
        speed: 0.1,        // Wave speed
    };

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        const sliceHeight = 1;
        const numSlices = canvas.height / sliceHeight;

        for (let i = 0; i < numSlices; i++) {
            const y = i * sliceHeight;
            const offset =
                Math.sin(
                    (y / canvas.height) * Math.PI * waveSettings.frequency +
                    time * waveSettings.speed * 0.05
                ) * waveSettings.amplitude;

            ctx.drawImage(
                sourceImage,
                0,
                y,
                canvas.width,
                sliceHeight,
                offset,
                y,
                canvas.width,
                sliceHeight
            );
        }

        time++;
        animationId = requestAnimationFrame(animate);
    }

    // Initialize canvas and start animation
    function initAnimation() {
        canvas.width = sourceImage.width;
        canvas.height = sourceImage.height;
        animate();
    }

    // Wait for image to load
    if (sourceImage.complete) {
        initAnimation();
    } else {
        sourceImage.onload = initAnimation;
    }

    // Optional: Return cleanup function
    return () => {
        if (animationId) {
            cancelAnimationFrame(animationId);
        }
    };
}