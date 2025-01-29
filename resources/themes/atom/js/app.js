import "./bootstrap";

console.log(
    "%cAtom CMS%c\n\nAtom CMS is a CMS for made for the community to enjoy. You can join our wonderful community at https://discord.gg/rX3aShUHdg\n\n",
    "color: #14619c; -webkit-text-stroke: 2px black; font-size: 32px; font-weight: bold;",
    ""
);

const canvas = document.getElementById("snowCanvas");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const snowflakes = [];


class Snowflake {
    constructor(x, y, radius, speed) {
        this.x = x;
        this.y = y;
        this.radius = radius;
        this.speed = speed;
    }

    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = "white";
        ctx.fill();
    }

    update() {
        this.y += this.speed;
        this.x += Math.sin(this.y / 50);

        if (this.y > canvas.height) {
            this.y = -this.radius;
            this.x = Math.random() * canvas.width;
        }
    }
}

function createSnowflakes(count) {
    for (let i = 0; i < count; i++) {
        const radius = Math.random() * 3 + 2;
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        const speed = Math.random() * 1 + 0.5;
        snowflakes.push(new Snowflake(x, y, radius, speed));
    }
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    snowflakes.forEach((snowflake) => {
        snowflake.update();
        snowflake.draw();
    });
    requestAnimationFrame(animate);
}

window.addEventListener("resize", () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

createSnowflakes(100);
animate();
