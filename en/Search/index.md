---
title: MAMP (Mac) Documentation
description: Search
layout: default-2
language: en
---

## Search

<!--{% for page in site.pages %}{{page.url}},{% endfor %}-->

<form action="/en/Search/">
  <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
</form>
<div id="tipue_search_content"></div>

<script>

var tipuesearch_pages = [{% for page in site.pages %}"{{page.url}}"{% if forloop.last == false %},{% endif %}{% endfor %}];

var tipuesearch = {"pages": [
{% for page in site.pages %}
{"title": "{{page.title}}", "text": "", "tags": "", "url": "{{page.url}}}{% if forloop.last == false %},{% endif %}
{% endfor %}
]};

$(document).ready(function() {
     $('#tipue_search_input').tipuesearch();
});
</script>
