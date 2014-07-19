	function mkp_section_header_link($atts)
	{
		extract(lAtts(array(
			'flavor'   => 'rss',
			'section'  => ''
		),$atts));
 
		$section = (!($section)) ? $GLOBALS["s"] : $section;
 
		$rs = safe_row("title","txp_section","name = '$section' limit 1");
		$sectionname = (empty($rs["title"])) ? $s.' ' : $rs["title"].' ';
		$sitesection = urlencode($section);
 
		if($flavor=='atom') {
			$out = '<link rel="alternate" type="application/atom+xml" '
			.'title="'.$sectionname.'Atom 1.0" href="'.hu.$sitesection.'/'.$flavor.'" />';
		} else {
			$out = '<link rel="alternate" type="application/rss+xml" '
			.'title="'.$sectionname.'RSS 0.92" href="'.hu.$sitesection.'/'.$flavor.'" />';
		}
 
		return $out;
	}
