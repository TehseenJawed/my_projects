


<form id="myForm">
    <div id="clonedSection1" class="clonedSection">
        <p>Name: <input type="text" name="name" id="name" /></p>
        <p>Product Description:</p>
        <p><textarea rows="10" cols="50" name="desc" id="desc"></textarea></p>
        <p>Brand Name: <input type="text" name="brand" id="brand" /></p>
        <p>Product Code Number: <input type="text" name="code" id="code" /></p>
        <p>West Texas Co-op Bid Product Number (if different from the Product Code Number): <input type="text" name="coop" id="coop" /></p>
        <p>Commodity processing availability: <input type="checkbox" name="yes" id="yes" value="Yes"> Yes <input type="checkbox" name="no" id="no" value="No"> No</p>
        <p>Commodity processing code number (if applicable): <input type="text" name="comm" id="comm" /></p>
    </div>
    <div>
        <input type="button" id="btnAdd" value="add another name" />
        <input type="button" id="btnDel" value="remove name" />
    </div>
</form>


<script type="text/javascript" src = "jquery-3.2.1.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#btnAdd").click(function() {
            var num     = $(".clonedSection").length;
            var newNum  = new Number(num + 1);

            var newSection = $("#clonedSection" + num).clone().attr("id", "clonedSection" + newNum);

            newSection.children(":first").children(":first").attr("id", "name" + newNum).attr("name", "name" + newNum);
            newSection.children(":nth-child(3)").children(":first").attr("id", "desc" + newNum).attr("name", "desc" + newNum);
            newSection.children(":nth-child(4)").children(":first").attr("id", "brand" + newNum).attr("name", "brand" + newNum);
            newSection.children(":nth-child(5)").children(":first").attr("id", "code" + newNum).attr("name", "code" + newNum);
            newSection.children(":nth-child(6)").children(":first").attr("id", "coop" + newNum).attr("name", "coop" + newNum);
            newSection.children(":nth-child(7)").children(":first").attr("id", "yes" + newNum).attr("name", "yes" + newNum);
            newSection.children(":nth-child(7)").children(":nth-child(2)").attr("id", "no" + newNum).attr("name", "no" + newNum);
            newSection.children(":nth-child(8)").children(":first").attr("id", "comm" + newNum).attr("name", "comm" + newNum);

            $(".clonedSection").last().append(newSection)

            $("#btnDel").attr("disabled","");

            if (newNum == 5)
                $("#btnAdd").attr("disabled","disabled");
        });

        $("#btnDel").click(function() {
            var num = $(".clonedSection").length; // how many "duplicatable" input fields we currently have
            $("#clonedSection" + num).remove();     // remove the last element

            // enable the "add" button
            $("#btnAdd").attr("disabled","");

            // if only one element remains, disable the "remove" button
            if (num-1 == 1)
                $("#btnDel").attr("disabled","disabled");
        });

        $("#btnDel").attr("disabled","disabled");
    });
</script>