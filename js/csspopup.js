/* this function shows the pop-up when
     user moves the mouse over the link */
    function Show()
    {
        /* get the mouse left position */
        x = event.clientX + document.body.scrollLeft;
        /* get the mouse top position  */
        y = event.clientY + document.body.scrollTop + 35;
        /* display the pop-up */
        Popup.style.display="block";
        /* set the pop-up's left */
        Popup.style.left = x;
        /* set the pop-up's top */
        Popup.style.top = y;
    }
    /* this function hides the pop-up when
     user moves the mouse out of the link */
    function Hide()
    {
        /* hide the pop-up */
        Popup.style.display="none";
    }
    