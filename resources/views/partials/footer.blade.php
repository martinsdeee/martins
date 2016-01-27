<?php 

use Carbon\Carbon;

?>
<footer>
    <nav class="z-depth-0 transparent">
      <ul class="center-align">
        <li><a href="#about">About me</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#contacts">Contacts</a></li>
      </ul>
    </nav>
  <p class="center-align copyright small-bold">
      All content copyright {{Carbon::now()->year}}
  </p>
</footer>