  function getContent() {
    // if there's no text, there's no need to pass html tags to the server that exist in the text editor even if there's no text
    if (document.getElementsByClassName("ql-editor")[0].textContent != '') {
        document.getElementById("article-contents").value = document.getElementsByClassName("ql-editor")[0].innerHTML;
        document.getElementById("article-title").value = document.getElementById("main-article-title").value;
    }

  }
