---
title: MAMP (Mac) Documentation
description: Search
layout: default-2
language: en
---

## Search

<form action="/en/Search/">
  <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
</form>
<div id="tipue_search_content"></div>

<script>

var tipuesearch = {"pages": [
{% for page in site.pages %}
{% if page.url contains "/en/" %}
{"title": "{{page.title}}", "text": "", "tags": "", "url": "{{page.url}}"},
{% endif %}
{% endfor %}
{"title": "", "text": "", "tags": "", "url": ""}
]};

$(document).ready(function() {
  $('#tipue_search_input').tipuesearch();
});
</script>
