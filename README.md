<h1>
Summary

</h1>
<p>
Creates a link to feed for use in the header portion of an xhtml page.

</p>
<h1>
\<txp:mkp\_header\_link /&gt;

</h1>
<h1>
Attribute

</h1>
<h2>
flavor: rss (default), atom

</h2>
<h1>
Example

</h1>
<p>
<span style="padding: 10px; border: 1px solid #999; background: #eee; display: block; margin: 10px 0 0 0; text-indent: 0; text-align: left; color: #600;width:600px;"><code>\<txp:mkp\_header\_link flavor=“atom” /&gt;</code></span><br />

</p>
<h1>
\<txp:mkp\_section\_header\_link /&gt;

</h1>
<h1>
Attributes

</h1>
<h2>
flavor: rss (default), atom

</h2>
<h2>
section: NULL (default), [site section]

</h2>
<h1>
Example

</h1>
<p>
<span style="padding: 10px; border: 1px solid #999; background: #eee; display: block; margin: 10px 0 0 0; text-indent: 0; text-align: left; color: #600;width:600px;"><code>\<txp:mkp\_section\_header\_link section=“article” /&gt;</code></span><br />

</p>
<h1>
Changelog

</h1>
<ul>
<li>
v0.9 – First release.

</li>
<li>
v0.91 – Added ability to link to feed for current section. (never released)

</li>
<li>
v0.92 – Added ability to link to feed for any section.

</li>
<li>
v0.93 – Deprecated: current and section attributes for \<txp:mkp\_header\_link /&gt; ; added \<txp:mkp\_section\_header\_link /&gt;.

</li>
</ul>
