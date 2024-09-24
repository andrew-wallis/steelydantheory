const contents = document.getElementById("contents");
const menuLinks = contents.querySelectorAll('li > a');

const getHeadingHeights = () => {

  const returnHeadings = [];
  const getHeadings = document.querySelectorAll('h2[id^="part-"]');

  getHeadings.forEach(function(heading) {       

    const headingObj = {};
    headingObj["id"] = heading.id;

    const rect = heading.getBoundingClientRect();
    const yPos = rect.top + window.scrollY;
    headingObj["pos"] = yPos;

    returnHeadings.push(headingObj);
  });

  return returnHeadings;
};

const updateActiveLink = () => {
  const html = document.documentElement;
  const scrollTop = html.scrollTop || document.body.scrollTop;
  let activeSection = '';

  for (let i = headings.length - 1; i >=0; i--) {
    if(scrollTop >= headings[i].pos -1 ) {
      activeSection = headings[i].id;
      break;
    }
  }
  
  menuLinks.forEach(function(link) {
    if(activeSection && !link.href.includes(activeSection)) {
      link.classList.add("inactive")
    } else {
      link.classList.remove("inactive");
    }
  });

  if(scrollTop < headings[0]) {
    menuLinks.forEach(function(link) {
      link.classList.remove("inactive");
    })
  }
};

let headings = getHeadingHeights();

window.addEventListener("load", () => {
  headings = getHeadingHeights();
  updateActiveLink();
});

window.addEventListener("resize", () => {
  headings = getHeadingHeights();
  updateActiveLink();
});

window.addEventListener("scroll", updateActiveLink);

