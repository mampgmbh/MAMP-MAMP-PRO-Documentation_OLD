function buildTOC(nodes, elm, lv) {
    var node;
    // filter
    do {
        node = nodes.shift();
    } while(node && !(/^h[123456]$/i.test(node.tagName)));
    // process the next node
    if (node) {
        var ul, li, cnt;
        var curLv = parseInt(node.tagName.substring(1));
        if (curLv == lv) { // same level append an il
            cnt = 0;
        } else if (curLv < lv) { // walk up then append il
            cnt = 0;
            do {
                elm = elm.parentNode.parentNode;
                cnt--;
            } while (cnt > (curLv - lv));
        } else if (curLv > lv) { // create children then append il
            cnt = 0;
            do {
                li = elm.lastChild;
                if (li == null)
                    li = elm.appendChild(document.createElement("li"));
                elm = li.appendChild(document.createElement("ul"));
                cnt++;
            } while (cnt < (curLv - lv));
        }
        li = elm.appendChild(document.createElement("li"));
        // replace the next line with archor tags or whatever you want
        li.innerHTML = '<a href="#'+node.id+'">' + node.innerHTML + '</a>';
        // recursive call
        buildTOC(nodes, elm, lv + cnt);
    }
}
