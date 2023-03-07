<!DOCTYPE html>
<!--    Team7.html       Working Admin Page for Book Buyer website
    10/12/2021 JLT,RV,MV Original Program   -->

    <html lang = "en">
    
    <head>
          <a href = "Admin_Page.php" > Back </a>


        <title> HTML Reference Page</title>
        <meta charset = "utf-8">
        <style>
            table {background-color: gray; color:rgb(255, 255, 255);
                    border-collapse: collapse; border: 1px;
                    font-family: arial; font-weight: normal;
                    text-align: center; margin-right: auto;
                    margin-left: auto}
            th {background-color: darkgray;
                font-size: 17px; font-style: italic;}
            td {font-size: 15px; padding-left: 5px; padding-right: 5px;}
            tr:nth-child(even) {background-color: darkgreen;}
        </style>
    </head>

    <body style = "background-color:#FCFFDB">

        <header>
            <h1 style = "color:purple;"> HTML Reference Page </h1>
            <HR>
        </header>

       <nav> 
        <a href = "https://www.w3schools.com/html/html5_semantic_elements.asp"> Structural Elements </a>  <BR>
        <a href = "https://www.w3schools.com/html/html_lists.asp"> Lists  </a>  <BR>
        <a href = "https://www.w3schools.com/html/html_tables.asp"> Tables </a> <BR>
        <a href = "https://validator.w3.org"> HTML Validator </a> <BR>
        <a href="https://www.w3schools.com/colors/colors_picker.asp">
            <img src="https://www.usability.gov/sites/default/files/images/color-wheel.png" width="50" height="50"> <a>
        
        <HR>
            
        </nav>
        
        <main> 
            
            <header> <h2 style = "text-align: center;"> HTML Commands </h2></header>

            <table border = 1> 
                <tr> 
                    <th> Item </th>
                    <th> Description </th>
                </tr>

                <tr>
                    <td> Head Tags </td>
                    <td> &lt;Head> 
                        <BR> &lt;Title>
                        <BR> &lt;meta charset = "utf-8" </td>
                </tr>

                <tr>
                    <td> Formatting </td>
                    <td> &lt;B> <b> BOLD </B> <strong> &lt;strong>  </strong>
                        <BR> <i> &lt;i> ITALICS </i> <em> &lt;em> </em> 
                        <BR> &lt;BLOCKQUOTE> info from another source 
                    </td>
                </tr>

                <tr>
                    <td> Page Breaks </td>
                    <td> &lt;BR> Line Break 
                        <BR> &lt;p> New Paragraph

                    </td>
                </tr>

                <tr>
                    <td> Lists </td>
                    <td> ul --> unordered list
                        <BR> ol --> ordered list
                        <BR> li --> elements </td>
                </tr>

                <tr>
                    <td> Headers </td>
                    <td> &lt;h1> - &lt;h6> </td>
                </tr>

                <tr>
                    <td> Links </td> 
                    <td> &lt;a href = "link"> message &lt;/a>  </td>
                </tr>
            </table>

            <header> <h2 style = "text-align: center;"> CSS Styles </h2></header>

            <table border = 1>

                <tr>
                    <th> Style </th>
                    <th> Description</th>
                </tr>
                <tr> 
                    <td> color:</td>
                    <td> text color</td>
                </tr>
                <tr>
                    <td> background-color:</td>
                    <td> background color</td>
                </tr>
                <tr>
                    <td> font-family:</td> 
                    <td> changes font </td>
                </tr>
                <tr>
                    <td> font-size: _px</td> 
                    <td> font size in pixels</td>
                </tr>
                <tr>
                    <td> font-weight: </td> 
                    <td> normal or bold font </td>
                </tr>
                <tr>
                    <td> padding-left: _px </td> 
                    <td> spaces in cells </td>
                </tr>
                <tr>
                    <td> margin-left: auto
                         margin-right: auto
                    </td>
                    <td> centers a table</td>
                </tr>

            </table>

            <header> <h2 style = "text-align: center;"> Website Design Best Practices </h2></header>>

            <table style = "background-color: white; color: black" border = 1>
                <tr>
                    <td> Avoid using too many different fonts</td>
                </tr>
                <tr>
                    <td> Avoid using too many different colors </td>
                </tr>
                <tr>
                    <td> Minimize text + reduce clutter on page </td>
                </tr>
                <tr>
                    <td> Use short sentences  </td>
                </tr>
                <tr>
                    <td> Use images to show rather than tell </td>
                </tr>
                <tr>
                    <td> Simplify the navigation </td>
                </tr>

            </table>

        </main>


<?php
    include "T7_footer.php";
?>
    </body>
</html>
    