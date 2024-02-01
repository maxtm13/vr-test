var jsvhover = function() {
    console.log('Ready');
    var menuDiv = document.getElementById("vertical-left-menu");
    if (!menuDiv)
        return;
    let subMenu;
    let menu;

    var nodes = menuDiv.getElementsByClassName("menu__item__parent");
    for (var i = 0; i < nodes.length; i++) {
        nodes[i].onclick = function () {
            this.classList.toggle('active');
            // console.log(this);
            subMenu = document.querySelector('.menu__item__parent.active ul.root-item');
            menu = document.getElementById("vertical-left-menu");
            subMenu.remove();
            menu.insertAdjacentElement('afterend', subMenu);
        }
    }

    const menu_child = document.querySelectorAll('.menu__item__parent ul li');
    for (i=0; i < menu_child.length; i+=1) {
        menu_child[i].addEventListener('click', menuClick)

        }
    function menuClick(e) {
        e.stopPropagation();
        console.log(this);

    }
    const selected = document.querySelector('.root-item-selected');
    if (selected) {
        selected.closest('.menu__item__parent').classList.add('active');
    }
    subMenu = document.querySelector('.menu__item__parent.active ul.root-item');
    menu = document.getElementById("vertical-left-menu");
    subMenu.remove();
    menu.insertAdjacentElement('afterend', subMenu);
}

//  // =============Default_code
// // }var jsvhover = function()
// // {
// // 	var menuDiv = document.getElementById("vertical-multilevel-menu");
// // 	if (!menuDiv)
// // 		return;
// //
// //   var nodes = menuDiv.getElementsByTagName("li");
// //   for (var i=0; i<nodes.length; i++)
// //   {
// //     nodes[i].onmouseover = function()
// //     {
// //       this.className += " jsvhover";
// //     }
// //
// //     nodes[i].onmouseout = function()
// //     {
// //       this.className = this.className.replace(new RegExp(" jsvhover\\b"), "");
// //     }
// //   }
// // }
// // =============Default_code_end
//
//
window.addEventListener("load", function (event) {

    console.log("All resources finished loading!");
    jsvhover();
});
// 	// window.onload( jsvhover);
//
