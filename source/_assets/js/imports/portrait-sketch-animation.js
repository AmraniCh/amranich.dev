export default function animatePortraitSketch() {
    const canvas = document.getElementById("canvas");
    const ctx = canvas.getContext("2d");
    const sourceImage = document.getElementById("sourceImage");

    let time = 0;
    let animationId;

    const waveSettings = {
        amplitude: 2, // Wave weight (height)
        frequency: 2.2, // Wave frequency
        speed: 0.1, // Wave speed
    };

    sourceImage.onload = function () {
        canvas.width = sourceImage.width;
        canvas.height = sourceImage.height;
        animate();
    };

    if (sourceImage.complete) {
        canvas.width = sourceImage.width;
        canvas.height = sourceImage.height;
        animate();
    }

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
}