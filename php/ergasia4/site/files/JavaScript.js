VanillaTilt.init(document.querySelectorAll(".Card"), {
    max: 25,
    speed: 400,
});
for (let i = 0; i < sizes.length; i++) {
    sises[i].addEventListener("click", () => {
        for (let i = 0; i < sizes.length; i++) {
            sizes[i].class.List.remove("active");
        }
    sizes[i].class.List.toggle("active");
});
}