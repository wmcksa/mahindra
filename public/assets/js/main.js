$(document).ready(() => {
  // set padding for fixed nav
  function setPageTopPadding() {
    $("body").css("padding-top", `${$(".navbar").outerHeight()}px`);
  }

  setPageTopPadding();

  $(window).resize(() => {
    setPageTopPadding();
  });

  // set direction of any owl carousel
  const dir = $("html").attr("dir"),
    carouselDirection = dir === "ltr" ? false : true;

  // nav-vehicles-slider
  $(".nav-vehicles-slider").owlCarousel({
    loop: false,
    margin: 24,
    nav: true,
    dots: false,
    items: 1,
    rtl: carouselDirection,
    navText:
      dir == "rtl"
        ? [
            "<i class='fa-solid fa-chevron-right fa-xl'></i>",
            "<i class='fa-solid fa-chevron-left fa-xl'></i>",
          ]
        : [
            "<i class='fa-solid fa-chevron-left fa-xl'></i>",
            "<i class='fa-solid fa-chevron-right fa-xl'></i>",
          ],
  });

  // vehicles-carousel
  $(".vehicles-carousel").owlCarousel({
    loop: false,
    margin: 12,
    nav: true,
    dots: false,
    rtl: carouselDirection,
    navText:
      dir == "rtl"
        ? [
            "<i class='fa-solid fa-chevron-right fa-xl'></i>",
            "<i class='fa-solid fa-chevron-left fa-xl'></i>",
          ]
        : [
            "<i class='fa-solid fa-chevron-left fa-xl'></i>",
            "<i class='fa-solid fa-chevron-right fa-xl'></i>",
          ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 4,
      },
    },
  });

  // init fancybox
  Fancybox.bind("[data-fancybox]", {
    Hash: false,
  });
});
// =============================================

const sub = document.getElementById("sub"); //get the form id
const input = document.getElementById("searchInput"); //get the search input id
const searchList = document.getElementById("searchList"); //get the search list where you want your searched item to display

//search the info.json file and filter it in the search box to appear when searched
const searchInfo = async (searchJson) => {
  //am using Es6 arrow function here

  const response = await fetch("/assets/js/info.json"); //get the json file into your javascript

  const info = await response.json(); //add the .json to the file to make it into a json in the javascript

  //make the searched term in the search box to match what is in the json file and filter it
  let list = info.filter((infos) => {
    const infoReg = new RegExp(`^${searchJson}`, "gi"); //the ^ in the REgExp means that only the first letter of the searched value will searched eg i want money to be searched by the first m not the other letters in it

    //the 'gi' above means you can search with both uppercase and lowercase letter and still get the same search value

    return infos.name.match(infoReg); //return what you what the json file to be searched with
    //as for me i want it to be searched with the name but you can choose anything you want either searched with url or number
  });

  //how to check if there is no value in the search box and if there is none then don't show anything
  if (searchJson.length == 0) {
    list = [];
    searchList.innerHTML = ""; //makes the info searched to be removed if there is no searched term/word in the input
    searchList.classList.remove("show");
  }

  //call the outputInfo function inside the here
  outputInfo(list);
};

//creating what will be be displayed when you type in your search
const outputInfo = (list) => {
  if (list.length > 0) {
    searchList.classList.add("show");
    //add the search value you want to show when you search the page
    const inputValue = list
      .map(
        (info) => `
           <li class="search-item">
              <a href="${info.url}">${info.name}</a>
            </li>
      `
      )
      .join("");
    // add the searched value(inputValue) to the div in index.html (searchList)
    searchList.innerHTML = inputValue;
  }
};

// add Eventlistener to the input
sub.addEventListener("input", (e) => {
  //    e.preventDefault(); //stop it from actually submiting the file

  searchInfo(input.value); //

  //    input.value = ''; //after searching remove the value in the input
});
