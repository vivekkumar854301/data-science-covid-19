let menu = document.querySelector('#menu-bar');
let nav = document.querySelector('.nav');
fetch('https://corona.lmao.ninja/v2/countries/India')
.then((response) => {
  return response.json();
})
.then((data) => {
  console.log(data);
  document.getElementById("country").innerHTML = data.country;
  document.getElementById("active").innerHTML = data.active.toLocaleString();
  document.getElementById("cases").innerHTML = data.cases.toLocaleString();
  document.getElementById("critical").innerHTML = data.critical.toLocaleString();
  document.getElementById("death").innerHTML = data.deaths.toLocaleString();
  document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
  document.getElementById("tests").innerHTML = data.tests.toLocaleString();
  document.getElementById("flag").src = data.countryInfo.flag;
});

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    nav.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .nav a');

window.onscroll = () => {

    menu.classList.remove('fa-times');
    nav.classList.remove('active');

    section.forEach(sec => {

        let top = window.scrollY;
        let height = sec.offsetHeight;
        let offset = sec.offsetTop - 150;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header .nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });


}