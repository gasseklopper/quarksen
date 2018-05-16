---
title: grid
---

<div class="container">
  <div class="columns">
    <div class="column col-6">col-6</div>
    <div class="column col-3">col-3</div>
    <div class="column col-2">col-2</div>
    <div class="column col-1">col-1</div>
  </div>

  <div class="columns col-gapless">
    <div class="column col-6">col-6</div>
    <div class="column col-6">col-6</div>
  </div>
  
  <div class="container">
  <div class="columns">
    <div class="column col-4 col-mr-auto">col-4 col-mr-auto</div>
    <div class="column col-2">col-2</div>
  </div>
</div>


  <div class="columns col-oneline">
    <div class="column col-8">col-8</div>
    <div class="column col-8">col-8</div>
  </div>
</div>


<div class="container">
  <div class="columns">
    <div class="column col-6">col-6
      <div class="columns">
        <div class="column col-6">col-6</div>
        <div class="column col-6">col-6</div>
      </div>
    </div>
    <div class="column col-6">col-6</div>
  </div>
</div>

<div class="container">
  <div class="columns">
    <div class="column col-xs-6">col-xs-6</div>
    <div class="column col-xs-3">col-xs-3</div>
    <div class="column col-xs-3">col-xs-3</div>
  </div>
</div>

<div class="container grid-lg">
  <div class="columns">
    ...
  </div>
</div>

<!-- Meter is green when low < value < high -->
<meter class="meter" value="20" min="0" max="100"></meter>
<meter class="meter" value="60" min="0" max="100" low="30" high="80"></meter>
<!-- Meter is yellow when value < low  or high < value -->
<meter class="meter" value="85" min="0" max="100" low="30" high="80"></meter>
<!-- Meter is red when value < low < high < optimum or optimum < low < high < value -->
<meter class="meter" value="20" optimum="90" min="0" max="100" low="30" high="80"></meter>