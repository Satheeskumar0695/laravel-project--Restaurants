const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");
    const Form2 =  document.getElementById("Form2");
    nextBtn.addEventListener("click", ()=> {
        Form2.classList.remove('second');

    })

    backBtn.addEventListener("click", () => {
        Form2.classList.add('second')
    });
