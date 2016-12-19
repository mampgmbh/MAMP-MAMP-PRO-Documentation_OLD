---
title: MAMP (Mac) Documentation
description: Search
layout: default-2
language: en
---

## Search

{% for page in site.pages %}
  <h3><a href="{{ page.url }}">{{ page.title }}</a></h3>
  <p>{{ page.content }}</p>
{% endfor %}

<form action="/en/Search/">
  <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
</form>
<div id="tipue_search_content"></div>

<script>
$(document).ready(function() {
     $('#tipue_search_input').tipuesearch({
          'mode': 'live',
          'liveContent': '#content'
     });
});
</script>
