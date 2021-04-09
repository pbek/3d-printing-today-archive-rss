<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:cc="http://web.resource.org/cc/" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:media="http://search.yahoo.com/mrss/" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:podcast="https://podcastindex.org/namespace/1.0" xmlns:googleplay="http://www.google.com/schemas/play-podcasts/1.0" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
	<channel>
		<atom:link href="https://threedprintingtoday.libsyn.com/rss" rel="self" type="application/rss+xml"/>
		<title>3D Printing Today Archive</title>
		<pubDate><?php print date("r"); ?></pubDate>
		<lastBuildDate><?php print date("r"); ?></lastBuildDate>
		<generator>pbek/3d-printing-today-archive-rss</generator>
		<link>http://threedprintingtoday.libsyn.com</link>
		<language>en</language>
		<copyright><![CDATA[CC]]></copyright>
		<docs>http://threedprintingtoday.libsyn.com</docs>
		<managingEditor>threedprintingtoday@sonic.net (threedprintingtoday@sonic.net)</managingEditor>
		<itunes:summary><![CDATA[Dr, Andy Cohen, with 28 years in the high tech industry, and Master Craftsman Whitney Potter both use 3D Printing, 3D capture and 3D Design professionally. These guys dig through all the hype to reveal the real value in what is happening today in the exciting world of 3D Printing. They discuss topics such as how to tune, upgrade and maintain your desktop factory, capturing physical objects into virtual 3D space, how to develop your own designs for 3D Printing, developing businesses related to 3D Printing and all the latest innovations. Each episode includes current events, 3-5 technically focused segments, and a "Thing of the week". The show also includes guest segments from luminaries and specialists including Emmett Lalish, Brook Drumm and lots of others across this incredible new Profession... ? Industry... ? Hobby... ?]]></itunes:summary>
		<image>
			<url>https://ssl-static.libsyn.com/p/assets/1/e/7/b/1e7b23d3ce8d62e7/3Dprintingtodaylogo.jpg</url>
			<title>3D Printing Today</title>
			<link><![CDATA[http://threedprintingtoday.libsyn.com]]></link>
		</image>
		<itunes:author>Andy Cohen &amp; Whitney Potter</itunes:author>
		<itunes:keywords>3dprinting,DIY,additive,make,manufacturing</itunes:keywords>
		<itunes:category text="Technology"/>
		<itunes:category text="Technology">
			<itunes:category text="Gadgets"/>
		</itunes:category>
		<itunes:category text="Games &amp; Hobbies"/>
		<itunes:image href="https://ssl-static.libsyn.com/p/assets/1/e/7/b/1e7b23d3ce8d62e7/3Dprintingtodaylogo.jpg" />
		<itunes:explicit>clean</itunes:explicit>
		<itunes:owner>
			<itunes:name><![CDATA[Andy Cohen & Whitney Potter]]></itunes:name>
			<itunes:email>threedprintingtoday@sonic.net</itunes:email>
		</itunes:owner>
		<description><![CDATA[Dr, Andy Cohen, with 28 years in the high tech industry, and Master Craftsman Whitney Potter both use 3D Printing, 3D capture and 3D Design professionally. These guys dig through all the hype to reveal the real value in what is happening today in the exciting world of 3D Printing. They discuss topics such as how to tune, upgrade and maintain your desktop factory, capturing physical objects into virtual 3D space, how to develop your own designs for 3D Printing, developing businesses related to 3D Printing and all the latest innovations. Each episode includes current events, 3-5 technically focused segments, and a "Thing of the week". The show also includes guest segments from luminaries and specialists including Emmett Lalish, Brook Drumm and lots of others across this incredible new Profession... ? Industry... ? Hobby... ?]]></description>
		<itunes:subtitle><![CDATA[Tips and tricks for working with 3D Printers]]></itunes:subtitle>
		<itunes:type>episodic</itunes:type>

<?php

for ($i = 328; $i >= 0; $i--) {
    $padNum = str_pad($i, 3, "0", STR_PAD_LEFT);

    ?>
        <item>
            <title><?php print $i; ?>_3DPrinting_Today</title>
            <itunes:title>3D Printing Today</itunes:title>
            <pubDate>Wed, 15 Apr 2020 13:30:00 +0000</pubDate>
            <guid isPermaLink="false"><![CDATA[3495a1b9-7707-427a-b91d-e69e1c94dbde]]></guid>
            <link><![CDATA[https://threedprintingtoday.libsyn.com/<?php print $padNum; ?>_3dprinting_today]]></link>
            <itunes:image href="https://ssl-static.libsyn.com/p/assets/1/e/7/b/1e7b23d3ce8d62e7/3Dprintingtodaylogo.jpg" />
            <description><![CDATA[<p>S3D and the TC revisit, Reviewing our Standards for Quality, Revisit Mesh Compensation</p>]]></description>
            <content:encoded><![CDATA[<p>S3D and the TC revisit, Reviewing our Standards for Quality, Revisit Mesh Compensation</p>]]></content:encoded>
            <enclosure length="54060097" type="audio/mpeg" url="https://traffic.libsyn.com/secure/threedprintingtoday/<?php print $padNum; ?>_3DPT.mp3?dest-id=182248" />
            <itunes:duration>50:13</itunes:duration>
            <itunes:explicit>clean</itunes:explicit>
            <itunes:keywords>3dprinting,3dprinter,3dprint</itunes:keywords>
            <itunes:subtitle><![CDATA[Episode <?php print $padNum; ?>]]></itunes:subtitle>
            <itunes:summary><?php print $padNum; ?></itunes:summary>
            <itunes:episodeType>full</itunes:episodeType>
            <itunes:author>Andy Cohen &amp; Whitney Potter</itunes:author>
        </item>
    <?php
}
?>

    </channel>
</rss>
