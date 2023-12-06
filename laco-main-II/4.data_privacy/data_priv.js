/*========== SHOW MENU FUNC ==========*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);


    toggle.addEventListener('click', () => {

        //Add show-menu class to nav menu
        nav.classList.toggle('show-menu')
        // Add show-icon class to show and hide menu icon
        toggle.classList.toggle('show-icon')

    });
};

showMenu('nav-toggle', 'nav-menu');


/*=============== Data Privacy ===============*/
//We call the tab list using the querySelector
var tab_list = document.querySelectorAll(".tabs_list ul li");

//Inside tab list we have tab_item class that contains all of the items
//Inside tab list was the data privacy contents
var tab_items = document.querySelectorAll(".tab_item");

//[FLOW]
//1. Now we need to iterate throug3h all of the items in the tab list using forEach method
tab_list.forEach(function(list){
    //2. for each items in tabs list we add EventListener that every time we click each one of them they will be activated
    list.addEventListener("click", function(){

        //5. Now this part we call a variable that handles the table list items by using a global attribute on HTML and we named it data-tc
        // it has a value of "data-tc"
        var tab_data = list.getAttribute("data-tc");
        console.log(tab_data);
        
        //4. now for this function every time we click other items in the tab list it will remove the (.active)
        // class that returns the list display attributes into default attributes
        tab_list.forEach(function(list){
            list.classList.remove("active");
        });

        //3. this one of the click listeners that will put (.active) class for each tab_list items
        // - if you click it, the items text color will be changed so that every users will understand where they clicked
        list.classList.add("active");

        //6. Now we call the table items from the top variable 
        // We use forEach method to call all of the items inside which is the items inside
        tab_items.forEach(function(item){
            var tab_class = item.getAttribute("id")
            console.log(tab_class);
            if(tab_class.includes(tab_data)){
                item.style.display = "block"
            } else {
                item.style.display = "none"
            }

        });

    });
});