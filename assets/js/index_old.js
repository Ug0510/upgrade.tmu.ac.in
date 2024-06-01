// Enable dropdown on hover in Menubar 
document.querySelectorAll('.navbar .nav-item.dropdown').forEach(function (everyDropdown) {
    everyDropdown.addEventListener('mouseover', function (e) {
        const _d = this.querySelector('.dropdown-menu');
        _d.classList.add('show');
    });
    everyDropdown.addEventListener('mouseout', function (e) {
        const _d = this.querySelector('.dropdown-menu');
        _d.classList.remove('show');
    });
});

// JS to align options of menubar depending upon the screen size
function checkAndApplyAlignment() {

    setTimeout(function () {
        let ulElements;
        ulElements = document.querySelectorAll('#menubar__content ul');

        ulElements.forEach(ul => {
            // Check if the element's scrollHeight is greater than its clientHeight

            if (ul.scrollHeight <= ul.clientHeight) {
                ul.style.alignContent = 'center';
            } else {
                ul.style.alignContent = 'normal';
            }
        });
    }, 10);
}


// Call the function when the DOM is ready and whenever a user clicks something inside #main--menubar
// document.addEventListener('DOMContentLoaded', checkAndApplyAlignment);
if (window.innerWidth > 1024) {
    document.querySelector('#main--menubar').addEventListener('click', checkAndApplyAlignment);
}


// Javascript of Menubar started

const customMainMenubar = document.getElementById('main--menubar');

//function to open menubar
function showMenubar() {
    // reseting the navbar
    resetMainMenubar();
    showBanner();

    const body = document.body;
    if (body) {
        body.classList.add('stop-body-scroll');
    }

    document.getElementById('menubar-back-button').style.display = 'none';
    customMainMenubar.classList.add('menubar-viewer');
}

function showBanner() {
    const imgBanner = document.getElementById('nav-banner');

    imgBanner.classList.add('super-active');
    imgBanner.classList.add('w-100');

    const scrollbar = document.getElementById('main--menubar').querySelector('div>.university-nav');

    if (scrollbar) {
        scrollbar.classList.add('sw-none');
    }

}

function hideBanner() {
    const imgBanner = document.getElementById('nav-banner');

    const scrollbar = document.getElementById('main--menubar').querySelector('div>.university-nav');


    if (scrollbar) {
        scrollbar.classList.remove('sw-none');
    }
    if (imgBanner.classList.contains('super-active'))
        {
            imgBanner.classList.remove('super-active');
            imgBanner.classList.remove('w-100');
        }
}

function removeSuperActiveClass() {
    // Get all elements with the specified classes
    var elements = document.querySelectorAll(
        '#menubar__submenu_courses, #menubar__submenu_content, #menubar--subcategories');

    // Iterate through each element
    elements.forEach(function (element) {
        // Check if the element has the class "super-active"
        if (element.classList.contains('super-active')) {
            // If it has the class, remove it
            element.classList.remove('super-active');
        }
    });
}



// function for the close button of navbar when it is in open state
function closeMenubar() {
    const MenubarCloseBtn = document.getElementById('close-btn-container');

    const body = document.body;
    if (body) {
        body.classList.remove('stop-body-scroll');
    }

    // Add the 'menubar-remover' class to 'main--menubar'
    customMainMenubar.classList.remove('menubar-viewer');

}




// function to show subcategories of menubar
async function showSubCategories(value) {


    try {
        const box = document.getElementById('menubar--subcategories');
        //resetting the div
        box.innerHTML = '';

        //fetching the json for data
        let categoryList;
        if (cachedData) {
            categoryList = cachedData;
        } else {
            const response = await fetch('menubarData.json');
            categoryList = await response.json();
        }


        // variable to store htmlContent
        let htmlContent = '';

        // iterating through json
        if (categoryList[value] && typeof categoryList[value] === 'object') {
            const category = categoryList[value];
            const screenWidth = window.innerWidth;
            for (const itemName in category) {
                if (!category[itemName].link) {
                    if (screenWidth > 1024) {
                        htmlContent += `<li class="underline__effect" onclick="openSubMenuContent('${value}','${itemName}',this)">${itemName}</li>`;
                    } else {
                        htmlContent += `<li class="underline__effect" onclick="openSubMenuContentMobile('${value}','${itemName}')">${itemName}</li>`;
                    }
                } else {
                    htmlContent +=
                        `<li><a href="${category[itemName].link}" class="additional-link">${itemName}</a></li>`;
                }
            }


            // concating data to DOM
            // For Desktop View
            // if(window.innerWidth > 1024)
            // {
            //     box.innerHTML = `<ul style="align-content:center;">${htmlContent}</ul>`;
            // }
            // else if(window.innerWidth > 480)
            // {
            //     box.innerHTML = `<ul style="align-content:start;">${htmlContent}</ul>`;
            // }

            box.innerHTML = `<ul>${htmlContent}</ul>`;

        } else {
            console.log("Category not found or not in the expected format.");
        }
    } catch (err) {
        console.error(err);
    }
}
// function to control category content show and control hover effect
function showMenuContent(choice, listItem) {
    hideBanner();


    if (innerWidth <= 480) {
        handleMainMenubar(choice, listItem);
        return;
    }

    // show content of choosen category
    showSubCategories(choice, listItem);

    const list = listItem.parentElement.querySelectorAll('li');
    const box = document.getElementById('menubar--subcategories');

    //closing submenu content
    document.getElementById('menubar__submenu_content').classList.remove('super-active');
    //closing submenu courses
    document.getElementById('menubar__submenu_courses').classList.remove('super-active');


    // handling if activated one is clicked again
    if (listItem.querySelector('h1').classList.contains('underline__effect_permanent')) {
        listItem.querySelector('h1').classList.remove('underline__effect_permanent');
        listItem.querySelector('h1').classList.add('underline__effect');

        //removing the categories menu and other sub-menu
        box.classList.remove('super-active');
        showBanner();
        return;
    }

    // removing permanent underline if present in any list selected previously
    list.forEach(items => {
        const item = items.querySelector('h1');
        if (item.classList.contains('underline__effect_permanent')) {
            item.classList.remove('underline__effect_permanent');
            item.classList.add('underline__effect');
        }
    })

    // adding permanent underline under selected list item
    listItem.querySelector('h1').classList.add('underline__effect_permanent');
    listItem.querySelector('h1').classList.remove('underline__effect');

    box.classList.add('super-active');
}


// function to show content of subMenus
async function openSubMenuContent(value, menu, listItem) {
    try {
        const box = document.getElementById('menubar__submenu_content');
        box.innerHTML = '';

        //reseting submenu_courses
        document.getElementById('menubar__submenu_courses').classList.remove('super-active');

        // if already active then turn it off
        if (listItem.classList.contains('underline__effect_permanent')) {
            listItem.classList.remove('underline__effect_permanent');
            listItem.classList.add('underline__effect');
            box.classList.remove('super-active');
            return;
        }

        let htmlContent = '';

        const response = await fetch('menubarData.json');
        const catalogue = await response.json();

        for (let item in catalogue[value][menu]) {
            if (catalogue[value][menu][item].link) {
                htmlContent +=
                    `<li><a href="${catalogue[value][menu][item].link}" class="additional-link">${item}</a></li>`;
            } else {
                htmlContent +=
                    `<li class='underline__effect' onclick="showSubMenuCourse('${value}','${menu}','${item}',this)">${item}</li>`;
            }
        }

        box.innerHTML = `<ul>${htmlContent}</ul>`;
        box.classList.add('super-active');

        const list = listItem.parentElement.querySelectorAll('li');

        // removing permanent underline if present in any list selected previously
        list.forEach(item => {
            if (item.classList.contains('underline__effect_permanent')) {
                item.classList.remove('underline__effect_permanent');
                item.classList.add('underline__effect');
            }
        })

        // adding permanent underline under selected list item
        listItem.classList.add('underline__effect_permanent');
        listItem.classList.remove('underline__effect');

    } catch (err) {
        console.log(err);
    }
}

// function to show sub-sub-sub menu (courses list)
async function showSubMenuCourse(value, menu, subMenu, listItem) {
    try {
        console.log('hi');
        const box = document.getElementById('menubar__submenu_courses');
        box.innerHTML = '';

        // Check if it's already active, if yes, turn it off
        if (listItem.classList.contains('underline__effect_permanent')) {
            listItem.classList.remove('underline__effect_permanent');
            listItem.classList.add('underline__effect');
            box.classList.remove('super-active');
            return;
        }

        let htmlContent = '';

        // Load data from the JSON file
        const response = await fetch('menubarData.json');
        const data = await response.json();




        // Check if the submenu exists in the JSON
        if (data[value] && data[value][menu] && data[value][menu][subMenu]) {
            const courses = data[value][menu][subMenu];
            for (let course in courses) {
                if (courses[course].link) {
                    htmlContent +=
                        `<li><a href="${courses[course].link}" class="additional-link">${course}</a></li>`;
                } else {
                    // You can handle sub-sub-sub menus here if needed
                    htmlContent +=
                        `<li class='underline__effect' onclick='showSubSubMenuCourse(value, menu, subMenu, course, this)'>${course}</li>`;
                }
            }

            box.innerHTML = `<ul>${htmlContent}</ul>`;
            box.classList.add('super-active');

            // Handle underline effect for selected list item
            const list = listItem.parentElement.querySelectorAll('li');
            list.forEach(item => {
                if (item.classList.contains('underline__effect_permanent')) {
                    item.classList.remove('underline__effect_permanent');
                    item.classList.add('underline__effect');
                }
            });
            listItem.classList.add('underline__effect_permanent');
            listItem.classList.remove('underline__effect');
        }

    } catch (err) {
        console.log(err);
    }
}

// function to show sub-sub-sub menu (courses list) in mobile view
async function showSubMenuCourseMobile(value, menu, subMenu) {
    try {
        // removing the options from menubar to insert submenucategories
        const ulBox = customMainMenubar.querySelector('.left-section > ul');
        ulBox.innerHTML = '';
        let htmlContent = '';

        // Load data from the JSON file
        const response = await fetch('menubarData.json');
        const data = await response.json();

        // Check if the submenu exists in the JSON
        if (data[value] && data[value][menu] && data[value][menu][subMenu]) {
            const courses = data[value][menu][subMenu];
            for (let course in courses) {
                if (courses[course].link) {
                    htmlContent +=
                        `<li><a href="${courses[course].link}" class="additional-link">${course}</a><i class="bi bi-arrow-right-short"></i></i></li>`;
                } else {
                    // You can handle sub-sub-sub menus here if needed
                    htmlContent +=
                        `<li class='underline__effect' onclick='showSubSubMenuCourse(value, menu, subMenu, course)'>${course}</li>`;
                }
            }


            ulBox.innerHTML = htmlContent;

            // Set the text and make the back button visible
            const backButton = document.getElementById('menubar-back-button');
            const backButtonText = document.getElementById('back-button-text');
            backButtonText.textContent = subMenu;
            backButton.style.display = 'block';

            // removing margin
            if (window.innerWidth <= 480) {
                if (ulBox) {
                    const liElements = ulBox.querySelectorAll('li');

                    liElements.forEach((li) => {
                        li.style.marginBottom = '0';
                    });
                }
            }

            //setting back function 
            backButton.setAttribute('data-click-value', "1");
            backButton.setAttribute('data-value', value);
            backButton.setAttribute('data-menu', menu);
        }

    } catch (err) {
        console.log(err);
    }
}


// Function to add class 'super-fade'
function addSuperFadeClass(element) {
    element.classList.add('super-fade');
}

// Event listener for scrolling
document.querySelector('.university-nav').addEventListener('scroll', function () {
    var icon = this.querySelector('.bi-chevron-double-down');
    addSuperFadeClass(icon);
});


function scrollToBottom(element) {
    var ulElement = element.parentElement;
    ulElement.scrollTop = ulElement.scrollHeight;
    addSuperFadeClass(element);
}



// Function to reset Main Menubar
function resetMainMenubar() {
    const ulElement = document.getElementById('main--menubar').querySelector('div>.university-nav');
    ulElement.innerHTML = `
						<li onclick="showMenuContent(0,this)" class="mt-4 mt-md-5" ><h1 class="underline__effect">
							<span><i class="fas fa-user"></i></span>
							Who We Are </h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(1,this)"><h1 class="underline__effect">
							<span><i class="fas fa-graduation-cap"></i></span>
							Academics</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(2,this)"><h1 class="underline__effect">
							<span><i class="fas fa-book"></i></span>
							Programmes</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(3,this)"><h1 class="underline__effect">
							<span><i class="fas fa-briefcase"></i></span>
							Placement</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(4,this)"><h1 class="underline__effect">
							<span><i class="far fa-newspaper"></i></span>
							Publications</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(5,this)"><h1 class="underline__effect">
							<span><i class="bi bi-folder-symlink-fill"></i></span>
							Active Links</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(6,this)"><h1 class="underline__effect">
							<span><i class="fas fa-building"></i></span>
							Colleges</h1><i class="bi bi-caret-right-fill"></i></li>
						<li onclick="showMenuContent(7,this)"><h1 class="underline__effect">
							<span><i class="bi bi-clipboard-data-fill"></i></span>
							Research</h1><i class="bi bi-caret-right-fill"></i></li>						
							
							<i class="bi bi-chevron-double-down" onclick="scrollToBottom(this)"></i>
						
					`;


    removeSuperActiveClass();
}




// function to show content of subMenus in mobile view
async function openSubMenuContentMobile(value, menu) {

    try {

        // removing the options from menubar to insert submenucategories
        const ulBox = customMainMenubar.querySelector('.left-section > ul');
        ulBox.innerHTML = '';
        let htmlContent = '';

        const response = await fetch('menubarData.json');
        const catalogue = await response.json();

        for (let item in catalogue[value][menu]) {
            if (catalogue[value][menu][item].link) {
                htmlContent +=
                    `<li><a href="${catalogue[value][menu][item].link}" class="additional-link">${item}</a><i class="bi bi-arrow-right-short"></i></li>`;
            } else {
                htmlContent +=
                    `<li class='underline__effect' onclick="showSubMenuCourseMobile('${value}','${menu}','${item}',this)">${item}</li>`;
            }
        }

        ulBox.innerHTML = htmlContent;

        // Set the text and make the back button visible
        const backButton = document.getElementById('menubar-back-button');
        const backButtonText = document.getElementById('back-button-text');
        backButtonText.textContent = menu;
        backButton.style.display = 'block';

        //setting back function 
        backButton.setAttribute('data-click-value', "0");


        // Setting margin to 0 in all li's
        if (window.innerWidth <= 480) {
            if (ulBox) {
                const liElements = ulBox.querySelectorAll('li');

                liElements.forEach((li) => {
                    li.style.marginBottom = '0';
                });
            }
        }


    } catch (err) {
        console.log(err);
    }
}

// function to activate the onclick in back button in main menubar
document.getElementById('menubar-back-button').addEventListener('click', function () {
    closeBox = document.getElementById('menubar-back-button');

    // getting data value
    const value = closeBox.getAttribute('data-click-value');
    if (value == '0') {
        closeBox.style.display = 'none';
        resetMainMenubar();
    }
    if (value == '1') {
        const value = closeBox.getAttribute('data-value');
        const menu = closeBox.getAttribute('data-menu');
        openSubMenuContentMobile(value, menu);
    }

})



// function to handle click event of menubar category 
async function handleMainMenubar(value, listItem) {


    // Get the h1 element within the list item
    const h1Element = listItem.querySelector('h1');

    if (h1Element.classList.contains('underline__effect_permanent')) {
        // If the h1 element has the permanent underline class, remove it
        h1Element.classList.remove('underline__effect_permanent');

        // if (window.innerWidth > 480) {
        //     h1Element.parentElement.style.marginBottom = '5vh';
        // }
    } else {

        // closing all other menu's 
        // Get the parent <ul> element containing all the <li> elements
        const parentUl = listItem.parentElement;

        // Get all <li> elements within the parent <ul>
        const liElements = parentUl.querySelectorAll('li');

        // Loop through all <li> elements to remove any nested <ul> elements
        liElements.forEach((li) => {
            // Get the nested <ul> element within the <li>
            const nestedUl = li.querySelector('ul');

            // Check if there's a nested <ul> element
            if (nestedUl) {
                // Remove the nested <ul> element
                li.removeChild(nestedUl);
                let hElement = li.querySelector('h1');
                if (hElement.classList.contains('underline__effect_permanent')) {
                    // If the h1 element has the permanent underline class, remove it
                    hElement.classList.remove('underline__effect_permanent');
                    // if (window.innerWidth > 480) {
                    //     li.style.marginBottom = '5vh';
                    // }
                }

            }
        });



        // If the h1 element doesn't have the permanent underline class, add it
        h1Element.classList.add('underline__effect_permanent');
        h1Element.classList.remove('underline__effect');
        h1Element.parentElement.style.marginBottom = '0vh';
        // Add scroll effect here 
        // scroll effect for every item except first one
        if (h1Element.parentElement.previousElementSibling !== null) {
            setTimeout(function () {
                h1Element.parentElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 50);
        }
    }

    // Toggle the visibility of the nested ul element
    const ulElement = listItem.querySelector('ul');
    if (ulElement) {
        if (ulElement.style.display === 'none') {
            ulElement.style.display = 'block';
        } else {
            ulElement.style.display = 'none';
        }
    } else {
        // If there's no nested <ul>, fetch and add the data
        const response = await fetch('menubarData.json');
        const categoryList = await response.json();

        let htmlContent = '';
        if (categoryList[value] && typeof categoryList[value] === 'object') {
            const category = categoryList[value];
            for (const itemName in category) {
                if (!category[itemName].link) {
                    htmlContent +=
                        `<li onclick="openSubMenuContentMobile('${value}','${itemName}')">${itemName}</li>`;
                } else {
                    htmlContent +=
                        `<li><a href="${category[itemName].link}" class="additional-link">${itemName}</a><i class="bi bi-arrow-right-short"></i></li>`;
                }
            }
        }
        // Create and append the nested <ul> with the fetched data
        const ul = document.createElement('ul');
        ul.innerHTML = htmlContent;
        listItem.appendChild(ul);

    }
}

document.addEventListener("DOMContentLoaded", function () {
    var myTabElement = document.getElementById('myTab');

    if (!myTabElement) {
        console.error("Error: Element with id 'myTab' not found.");
        return;
    }

    try {
        var myTab = new bootstrap.Tab(myTabElement);
        myTab.show();
    } catch (error) {
        
    }
});


// horizontal tabs ends



// Javascript to fetch menubarData json file started

let cachedData;

// Function to fetch and cache JSON data during page load
async function fetchAndCacheData() {
    try {
        const response = await fetch('menubarData.json');
        cachedData = await response.json();
        console.log(cachedData);
    } catch (err) {
        console.error('Error fetching data:', err);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // Call your function here
    console.log('called');
    fetchAndCacheData();
});

// Javascript to fetch menubarData json file end


// mobile view tray start 
let newStartY;
let newMenu = document.getElementById("new-menu");
let newArrow = document.querySelector('.new-arrow');
let newMenuIcon = document.getElementById("new-menu-icon");

function toggleNewMenu() {
    if (newMenu.style.display === "block") {
        newMenu.style.display = "none";
        newArrow.classList.remove('down');
        newMenuIcon.src = "assets/img/icons/arrowu.png"; // Change image when menu closes
    } else {
        newMenu.style.display = "block";
        newArrow.classList.add('down');
        newMenuIcon.src = "assets/img/icons/arrowd.png"; // Change image when menu opens
    }
}

document.querySelector('.new-menu-container').addEventListener('touchstart', touchStart, false);
document.querySelector('.new-menu-container').addEventListener('touchmove', touchMove, false);
document.querySelector('.new-menu-container').addEventListener('touchend', touchEnd, false);

function touchStart(event) {
    newStartY = event.touches[0].clientY;
}

function touchMove(event) {
    let y = event.touches[0].clientY;
    let distance = y - newStartY;
    if (distance > 0) {
        // Swipe down
        newMenu.style.display = "none";
        newArrow.classList.remove('down');
        newMenuIcon.src = "assets/img/icons/arrowu.png"; // Change image when menu closes
    }
}

function touchEnd(event) {
    let y = event.changedTouches[0].clientY;
    let distance = y - newStartY;
    if (distance < 0) {

        // Swipe up
        newMenu.style.display = "block";
        newArrow.classList.add('down');
        newMenuIcon.src = "assets/img/icons/arrowd.png"; // Change image when menu opens
    }
}
// mobile view tray ends


// <!--side buttons js start-->


// JavaScript code to expand side buttons for 5 seconds
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll('.expandable-button');
    
    // Expand buttons on page load
    buttons.forEach(button => {
        button.classList.add('expanded');
    });

    // Collapse buttons after 5 seconds
    setTimeout(() => {
        buttons.forEach(button => {
            button.classList.remove('expanded');
            button.classList.add('minimized');
        });
    }, 5000);

    // Expand buttons on hover
    buttons.forEach(button => {
        button.addEventListener('mouseover', () => {
            button.classList.remove('minimized');
        });
        button.addEventListener('mouseout', () => {
            button.classList.add('minimized');
        });
    });
});
// <!--side buttons js ends-->


// -------------JS for index page banner ------------
// window.addEventListener('DOMContentLoaded', function() {
//         const vid = document.getElementById('main-banner-vid');

//         if (vid) {
//             // Once metadata is loaded, switch to higher quality video
//             vid.setAttribute("src", "poster/tmu_video.mp4");

//             // Start playback
//             vid.play();
//             document.getElementById('banner-tmu-img').style.display = 'none';
//             vid.classList.remove('d-none');


//         };


//     });


// -----------College Banner slider----------

    let currentIndex = 0;
    const slides = document.querySelectorAll('.featured-slide');
    const totalSlides = slides.length;
    let autoSlideInterval;

    function showSlide(index) {
        try {
            if (isNaN(index)) {
                throw new Error("Invalid index. Please provide a valid number.");
            }

            if (index < 0) {
                index = totalSlides - 1;
            } else if (index >= totalSlides) {
                index = 0;
            }

            const offset = -index * 100;
            const slider = document.querySelector('.featured-slider');

            if (!slider) {
                throw new Error("Slider element not found.");
            }

            slider.style.transform = `translateX(${offset}%)`;
            currentIndex = index;
        } catch (error) {
            console.error("Error in showSlide function:", error.message);
        }
    }


    function nextSlide() {
        showSlide(currentIndex + 1);
    }

    function prevSlide() {
        showSlide(currentIndex - 1);
    }

    function startAuto() {
        autoSlideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
    }

    function stopAuto() {
        clearInterval(autoSlideInterval);
    }

    startAuto();



    //   career accordian
    var acc = document.getElementsByClassName("careers-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
                this.querySelector(".icon").innerHTML = "+";
                this.classList.remove("clicked"); // Remove clicked class when closing
            } else {
                // Close all other panels
                var allPanels = document.querySelectorAll('.panel');
                for (var j = 0; j < allPanels.length; j++) {
                    allPanels[j].style.display = 'none';
                    var accordion = allPanels[j].previousElementSibling;
                    accordion.querySelector(".icon").innerHTML = "+";
                    accordion.classList.remove("clicked"); // Remove clicked class from other accordions
                }
                panel.style.display = "block";
                this.querySelector(".icon").innerHTML = "-";
                this.classList.add("clicked"); // Add clicked class when opening
            }
        });
    }

// --------------College Banner Js end-------------



// <!-- Management page awards carousel  -->

	var swiper = new Swiper(".swiper-management-awards", {
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		coverflowEffect: {
			rotate: 0,
			stretch: 0,
			depth: 100,
			modifier: 3,
			slideShadows: true
		},
		navigation: {
			nextEl: '.swiper-button-next', // Next slide button
			prevEl: '.swiper-button-prev', // Previous slide button
		},
		loop: true,
		autoplay: {
			delay: 2000,
		},
		breakpoints: {
			640: {
				slidesPerView: 2
			},
			768: {
				slidesPerView: 2
			},
			1024: {
				slidesPerView: 3
			},
			1560: {
				slidesPerView: 3
			}
		}
	});



// <!---------- City In It Self JS Start -------->

	var swiper = new Swiper(".swiper-container", {
		effect: "slide",
		grabCursor: true,
		coverflowEffect: {
			rotate: 0,
			stretch: 0,
			depth: 100,
			modifier: 3,
			slideShadows: true
		},
		navigation: {
			nextEl: '.swiper-button-next', // Next slide button
			prevEl: '.swiper-button-prev', // Previous slide button
		},
		loop: true,
		autoplay: {
			delay: 2000,
		},
		breakpoints: {
			480: {
				slidesPerView: 1
			},
			640: {
				slidesPerView: 1.2
			},
			768: {
				slidesPerView: 1.6
			},
			1024: {
				slidesPerView: 2.2
			},
			1560: {
				slidesPerView: 2.2
			}
		}
	});

// <!---------- City In It Self JS end -------->


// Owl Carousels js

	$(document).ready(function() {
		var owl = $('#owl-carousel1');
		owl.owlCarousel({
			items: 4, // Number of items to display in desktop view
			loop: true,
			margin: 20,
			autoplay: true,
			autoplayTimeout: 2000, // Auto-scroll interval
			responsive: {
				0: {
					items: 1 // Number of items to display in mobile view
				},
				768: {
					items: 1 // Number of items to display in tablet view
				},
				992: {
					items: 4 // Number of items to display in desktop view
				}
			}
		});

		// Stop autoplay on hover
		owl.hover(function() {
			owl.trigger('stop.owl.autoplay');
		}, function() {
			owl.trigger('play.owl.autoplay', [3000]);
		});
	});

	$(document).ready(function() {
		var owl2 = $('#owl-carousel2');
		owl2.owlCarousel({
			items: 2, // Number of items to display in desktop view
			loop: true,
			margin: 20,
			dots: false,
			autoplay: true,
			autoplayTimeout: 3000, // Auto-scroll interval
			responsive: {
				0: {
					items: 1 // Number of items to display in mobile view
				},
				768: {
					items: 2 // Number of items to display in tablet view
				},
				992: {
					items: 2 // Number of items to display in desktop view
				}
			}
		});

		// Stop autoplay on hover
		owl2.hover(function() {
			owl2.trigger('stop.owl.autoplay');
		}, function() {
			owl2.trigger('play.owl.autoplay', [3000]);
		});
	});


	$(document).ready(function() {
		var owl3 = $('#owl-carousel3');
		owl3.owlCarousel({
			items: 1, // Number of items to display in desktop view
			loop: true,
			margin: 20,
			dots: false,
			autoplay: true,
			autoplayTimeout: 3000, // Auto-scroll interval
			responsive: {
				0: {
					items: 1 // Number of items to display in mobile view
				},
				768: {
					items: 1 // Number of items to display in tablet view
				},
				992: {
					items: 1 // Number of items to display in desktop view
				}
			}
		});

		// Stop autoplay on hover
		owl3.hover(function() {
			owl3.trigger('stop.owl.autoplay');
		}, function() {
			owl3.trigger('play.owl.autoplay', [3000]);
		});
	});



	$(document).ready(function() {
		var owl4 = $('#owl-carousel4');
		owl4.owlCarousel({
			items: 4, // Number of items to display in desktop view
			loop: true,
			margin: 20,
			autoplay: true,
			autoplayTimeout: 2000, // Auto-scroll interval
			responsive: {
				0: {
					items: 1 // Number of items to display in mobile view
				},
				768: {
					items: 1 // Number of items to display in tablet view
				},
				992: {
					items: 4 // Number of items to display in desktop view
				}
			}
		});

		// Stop autoplay on hover
		owl4.hover(function() {
			owl4.trigger('stop.owl.autoplay');
		}, function() {
			owl4.trigger('play.owl.autoplay', [3000]);
		});
	});

	/* Notice board marwuee */


// <!--------- Side Enquire toggle form start --------->

	$(document).ready(function() {
		$('.toggle-side').click(function() {
			$('.sidebar-contact').toggleClass('active')
			$('.toggle-side').toggleClass('active')
		})
	})

// <!--------- Side Enquire toggle form end --------->



	var button = document.getElementById('menubar--open--button');

	window.addEventListener('scroll', function() {
		var scrollPosition = window.scrollY;

		// Adjust the threshold as needed
		var threshold = 100;

		// Check if the scroll position is below the threshold
		if (scrollPosition > threshold) {
			button.classList.add('scroll-down');
		} else {
			button.classList.remove('scroll-down');
		}
	});



	window.addEventListener('DOMContentLoaded', function() {
		// Simulate a delay (e.g., 2000 milliseconds or 2 seconds)
		setTimeout(function() {

			// Fade Preloader
			document.querySelector(".preloader").style.display = "none";

			// Show menu button
			document.getElementById('menubar--open--button').style.display = 'flex';

			// Making body accessible
			document.querySelector('body').style.height = 'auto';
			document.querySelector('body').style.overflowY = 'scroll';

			const wrapper = document.getElementById('wrapper');

			if (wrapper) {
				wrapper.style.display = 'block';
			}


		});
	});


	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			autoplay: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});
	});


	$(document).ready(function() {
		$("#owl-certificate").owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			autoplay: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});
	});



	// var swiper = new Swiper('.swiper-containerss', {
	// 	slidesPerView: 'auto', // Show as many slides as possible depending on the container's width
	// 	spaceBetween: 30, // Space between slides
	// 	pagination: {
	// 		el: '.swiper-pagination', // Pagination container
	// 		clickable: true, // Allow pagination bullets to be clickable
	// 	},
	// 	navigation: {
	// 		nextEl: '.swiper-button-next', // Next slide button
	// 		prevEl: '.swiper-button-prev', // Previous slide button
	// 	},
	// 	loop: true,
	// 	effect: 'coverflow',
	// 	centeredSlides: true,
	// 	coverflowEffect: {
	// 		rotate: 50,
	// 		stretch: 0,
	// 		depth: 100,
	// 		modifier: 1,
	// 		slideShadows: true,
	// 	}
	// });



    // -------------------------------------------------------
    // Javascript for Read more function implementation start
    // -------------------------------------------------------

    $('.read-more').click(function() {
        $(this).prev().slideToggle();
        if (($(this).text()) == "Read More") {
            $(this).text("Read Less");
        } else {
            $(this).text("Read More");
        }
    });

     // -------------------------------------------------------
    // Javascript for Read more function implementation end
    // -------------------------------------------------------

// -------------------------------------------------------
    // Javascript for cbcs circular (data tables) function implementation start
    // -------------------------------------------------------

    jQuery(document).ready(function() {
        jQuery('#datatable1').dataTable();
    });
// -------------------------------------------------------
    // Javascript for cbcs circular (data tables) function implementation End
    // -------------------------------------------------------



    // Success Stories js 
    document.getElementById('closePopupBtn').addEventListener('click', function() {
        document.getElementById('success-stories-popup').style.display = 'none';
    });

    function showStory(index) {
        document.getElementById('success-stories-popup').style.display = 'flex';
        const mainPopup = document.getElementById('success-stories-popup');
        mainPopup.style.display = 'flex';
        const iFrame = mainPopup.querySelector('iframe');

        let iframsSrc = ""
        if(index === 0)
        {
            iframsSrc = "https://www.youtube.com/embed/tEkfa3bIY5o";
        }


        iFrame.setAttribute('src', iframsSrc);
    }
    document.getElementById('success-stories-popup').addEventListener('click', function(event) {
        const popup = document.getElementById('success-stories-popup');
        const popupContent = document.querySelector('.popup-content');

        console.log(event.target);

        if (event.target !== popupContent) {
            popup.style.display = 'none';
        }
    });
    // Success Stories js end