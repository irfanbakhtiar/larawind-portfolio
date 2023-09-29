// Hamburger Menu
// const hamburger = document.querySelector('#hamburger');
// hamburger.addEventListener('click', function () {
//     hamburger.classList.toggle('hamburger-active');
// });

// Close Alert Notif
function closeAlert(event) {
    let element = event.target;
    while (element.nodeName !== "BUTTON") {
        element = element.parentNode;
    }
    element.parentNode.parentNode.removeChild(element.parentNode);
}

//Preview Image
function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}

//Menu
function dropDown() {
        document.querySelector('#submenu').classList.toggle('hidden')
        document.querySelector('#arrow').classList.toggle('rotate-0')
    }

//Sidebar
function Openbar() {
        document.querySelector('.sidebar').classList.toggle('left-[-300px]')
        // document.body.classList.add('stop-scrolling')
        // if( document.querySelector('.sidebar').classList.toggle('left-[-300px]')) {
        //     document.body.classList.remove('stop-scrolling');
        // } else {
        //     document.body.classList.add('stop-scrolling');
        // }
    }

//Read more and hide
function toggleText() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var button = document.getElementById("button");

        if (dots.classList.contains("hidden")) {
            dots.classList.remove("hidden");
            moreText.classList.add("hidden");
            button.innerHTML = "Read more";
        } else {
            dots.classList.add("hidden");
            moreText.classList.remove("hidden");
            button.innerHTML = "Hide";
        }
    }

    // window.addEventListener('scroll', (e) => {
    //     const nav = document.querySelector('.navbar');
    //     if (window.pageYOffset > 0) {
    //         nav.classList.add("shadow-md");
    //     } else {
    //         nav.classList.remove("shadow-md");
    //     }
    // });