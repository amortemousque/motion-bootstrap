function process(str) {

    var div = document.createElement('div');
    div.innerHTML = str.trim().replace(/(\r\n|\n|\r)/gm,"");;
;

    return format(div, 0).innerHTML;
}

function format(node, level) {

    var indentBefore = new Array(level++ + 1).join('  '),
        indentAfter  = new Array(level - 1).join('  '),
        textNode;

    for (var i = 0; i < node.children.length; i++) {

        textNode = document.createTextNode('\n' + indentBefore);
        node.insertBefore(textNode, node.children[i]);

        format(node.children[i], level);

        if (node.lastElementChild == node.children[i]) {
            textNode = document.createTextNode('\n' + indentAfter);
            node.appendChild(textNode);
        }
    }

    return node;
}


function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

function parseCode() {
    $(".code-sheet").each(function(){
    var html = $(this).prev().children().first().html();
    console.log(html);
    html = process(html);
    html = htmlEntities(html);
    $(this).find("code").append(html);
    });
}

parseCode();