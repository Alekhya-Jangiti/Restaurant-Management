<html>
<script>
    const btn = document.querySelector("button");
    const post = document.querySelector(".post");
    const widget = document.querySelector(".star-widget");
    const editBtn = document.querySelector(".edit");
    btn.onclick = () => {
        widget.style.display = "none";
        widget.style.display = "block";
        return false;
        editBtn.onclick = () => {
            widget.style.display = "block";
            widget.style.display = "none";
        }
        return false;
    }
</script>
</html>