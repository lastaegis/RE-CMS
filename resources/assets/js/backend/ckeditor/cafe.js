"use strict";
const cafeNotes = document.getElementById("notes");
if(!!cafeNotes)
{
    CKEDITOR.replace(cafeNotes);
}