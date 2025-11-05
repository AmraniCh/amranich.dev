export default function animatePortraitSketch() {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    const sourceImage = document.getElementById("sourceImage");

    let time = 0;
    let animationId;
    let lastFrameTime = 0;
    const frameInterval = 1000 / 60; // 60 FPS

    const waveSettings = {
        amplitude: 2.3,
        frequency: 2.2,
        speed: 0.2,
    };

    sourceImage.onload = function () {
        canvas.width = sourceImage.width;
        canvas.height = sourceImage.height;
        animate(0);
    };

    if (sourceImage.complete) {
        canvas.width = sourceImage.width;
        canvas.height = sourceImage.height;
        animate(0);
    }

    function animate(currentTime) {
        const deltaTime = currentTime - lastFrameTime;

        if (deltaTime < frameInterval) {
            animationId = requestAnimationFrame(animate);
            return;
        }

        lastFrameTime = currentTime - (deltaTime % frameInterval);

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
}