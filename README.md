mkp_section_header_link
=======================
<h1>Summary</h1>

<p>Creates a link to feed for use in the header portion of an xhtml page.</p>

<h1>&lt;txp:mkp_header_link /&gt;</h1>

<h1>Attribute</h1>

<h2>flavor: rss (default), atom</h2>

<h1>Example</h1>

<p><span style="padding: 10px; border: 1px solid #999; background: #eee; display: block; margin: 10px 0 0 0; text-indent: 0; text-align: left; color: #600;width:600px;"><code>&amp;lt;txp:mkp_header_link flavor=&quot;atom&quot; /&amp;gt;</code></span><br />
</p>

<h1>&lt;txp:mkp_section_header_link /&gt;</h1>

<h1>Attributes</h1>

<h2>flavor: rss (default), atom</h2>

<h2>section: <span class="caps">NULL</span> (default), [site section]</h2>

<h1>Example</h1>

<p><span style="padding: 10px; border: 1px solid #999; background: #eee; display: block; margin: 10px 0 0 0; text-indent: 0; text-align: left; color: #600;width:600px;"><code>&amp;lt;txp:mkp_section_header_link section=&quot;article&quot; /&amp;gt;</code></span><br />
</p>

<h1>Changelog</h1>

<ul>
<li>v0.9 &#8211; First release.</li>
<li>v0.91 &#8211; Added ability to link to feed for current section. (never released)</li>
<li>v0.92 &#8211; Added ability to link to feed for any section.</li>
<li>v0.93 &#8211; Deprecated: current and section attributes for &lt;txp:mkp_header_link /&gt; ; added &lt;txp:mkp_section_header_link /&gt;.</li>
</ul>
