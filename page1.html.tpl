<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>SMARTY</title>
  </head>
  <body>
    <h1>Hello world!</h1>
    <h2>Hello wy</h2>

{include file="main.css"}
{include file="header.html"}
{include file="footer.html"}


    
    {if isset ($DATA)}
    <div>{$DATA}</div>
    {else}
    <div>toto</div>

    {/if}
<h3>Abdellatif</h3>

  </body>
</html>
