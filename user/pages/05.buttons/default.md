---
title: Buttons
---

# Say Hello to my Buttons
## successfully clicking...

 # Buttons

Congratulations! You have reached the **Button Section** that provides a **collection page** of the **Buttons** that are included, simple **button styles** for **actions** in different **types and sizes** to get you started.

<button class="btn">default button</button>
<button class="btn btn-primary">primary button</button>
<button class="btn btn-link">link button</button>
___


Add the `btn` class to `<a></a>`, `<input></input>` or `<button></button>` elements for a default button. There are classes `btn-primary` and `btn-link` for predefined primary and link buttons.
    
    ---
         <button class="btn ">button </button> 
         <button class="btn btn-primary">primary button</button>
         <button class="btn btn-link">link button</button>
     


 # Button Colors
 
 <button class="btn btn-success">success button</button>
 <button class="btn btn-error">error button</button>
 <button class="btn btn-warning">link button</button>
___
Add the `btn-success` or `btn-error` class for success (green) or error (red) button color. If you need more button colors, please use button mixins to create your own button color variants.

    ---
         <button class="btn btn-success">success button</button>
		 <button class="btn btn-error">error button</button>
         <button class="btn btn-warning">link button</button>
      

 # Button Sizes
<button class="btn btn-lg">large button</button>
<button class="btn btn-sm">small button</button>

<button class="btn btn-block">block button</button>

<button class="btn btn-primary btn-lg"><i class="icon icon-arrow-left"></i> large</button>
<button class="btn btn-primary"><i class="icon icon-arrow-left"></i> normal</button>
<button class="btn btn-primary btn-sm"><i class="icon icon-arrow-left"></i> small</button>
Add the btn-sm or btn-lg class for small or large button size. Also, you can add the btn-block class for a full-width button.

	---
         <button class="btn btn-lg">large button</button>
         <button class="btn btn-sm">small button</button>

         <button class="btn btn-block">block button</button>

         <button class="btn btn-primary btn-lg"><i class="icon icon-arrow-left"></i> large</button>
         <button class="btn btn-primary"><i class="icon icon-arrow-left"></i> normal</button>
         <button class="btn btn-primary btn-sm"><i class="icon icon-arrow-left"></i> small</button>

Please note that you could use the btn-action class for a square button, or add another circle class for a round button, which is often used as a Float Action Button (FAB).
<button class="btn btn-action"><i class="icon icon-arrow-left"></i></button>
<button class="btn btn-action circle"><i class="icon icon-arrow-left"></i></button>
	---
         <button class="btn btn-action"><i class="icon icon-arrow-left"></i></button>
		 <button class="btn btn-action circle"><i class="icon icon-arrow-left"></i></button>

 # Button States

<button class="btn active">active button</button>

<button class="btn disabled" tabindex="-1">disabled button</button>
<button class="btn" disabled tabindex="-1">disabled button</button>
 # Button Loading State

<button class="btn loading">button</button>
 # Button Group
<div class="btn-group btn-group-block">
  <button class="btn">first button</button>
  <button class="btn">second button</button>
  <button class="btn">third button</button>
</div>

<button class="btn btn-action btn-primary btn-lg"><i class="icon icon-menu"></i></button>
<button class="btn btn-action btn-primary"><i class="icon icon-menu"></i></button>
<button class="btn btn-action btn-primary btn-sm"><i class="icon icon-menu"></i></button>