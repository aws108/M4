<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<head>
				<link rel="stylesheet" type="text/css" href="cookbook.css"/>
			</head>
		  	<body>

		  		
		  		<header> <xsl:value-of select="cookbook/name"/></header>
		  		
		  		<p> <xsl:value-of select="cookbook/description"/></p>
		  		<h1><xsl:value-of select="cookbook/recipes/recipe[@id='MushroomSoup']/title"/></h1>
		  		<p>This recipe is for vegetarians.</p> 
		  		
				<table border="1">
					<tr>
						<th bgcolor="#4CAF50" colspan="3">Ingredients </th> 
					</tr>
					<tr>
						<th bgcolor="#4CAF50">Name</th>
						<th bgcolor="#4CAF50">Quantity</th>
						<th bgcolor="#4CAF50">Unit</th>
					</tr>
					
					<xsl:for-each select="cookbook/recipes/recipe[@id='MushroomSoup']/ingredient">
						<tr>
							<td><xsl:value-of select="@name"/></td>
							<td><xsl:value-of select="@quantity"/></td>
							<td><xsl:value-of select="@unit"/></td>
						</tr>
					</xsl:for-each>
				</table>

					<p>Steps:</p>
					<xsl:for-each select="cookbook/recipes/recipe[@id='MushroomSoup']/method">
						<ul>
							<li><xsl:value-of select="step[1]"/></li>
							<li><xsl:value-of select="step[2]"/></li>
							<li><xsl:value-of select="step[3]"/></li>
							<li><xsl:value-of select="step[4]"/></li>
							<li><xsl:value-of select="step[5]"/></li>
							<li><xsl:value-of select="step[6]"/></li>
							<li><xsl:value-of select="step[7]"/></li>
						</ul>
					</xsl:for-each>

					<h1><xsl:value-of select="cookbook/recipes/recipe[@id='HamOnToast']/title"/></h1>

					<p>This recipe is not for vegetarians.</p>
				<table border="1">
					<tr>
						<th bgcolor="#4CAF50" colspan="3">Ingredients</th> 
					</tr>
					<tr>
						<th bgcolor="#4CAF50">Name</th>
						<th bgcolor="#4CAF50">Quantity</th>
						<th bgcolor="#4CAF50">Unit</th>
					</tr>
					
					<xsl:for-each select="cookbook/recipes/recipe[@id='HamOnToast']/ingredient">
						<tr>
							<td><xsl:value-of select="@name"/></td>
							<td><xsl:value-of select="@quantity"/></td>
							<td><xsl:value-of select="@unit"/></td>
						</tr>
					</xsl:for-each>
				</table>

				<p>Steps:</p>
				<xsl:for-each select="cookbook/recipes/recipe[@id='HamOnToast']/method">
						<ul>
							<li><xsl:value-of select="step[1]"/></li>
							<li><xsl:value-of select="step[2]"/></li>
							<li><xsl:value-of select="step[3]"/></li>
							<li><xsl:value-of select="step[4]"/></li>
						</ul>
					</xsl:for-each>

			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>