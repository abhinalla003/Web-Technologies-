<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template>
        <h2>Movie Collection</h2>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Length</th>
                <th>No.of Actors</th>
                <th>Directors</th>
                <th>Year</th>
                <th>Rating</th>
            </tr>
            <xsl:for-each select="movie">
            <tr>
                <td>
                    <xsl:value-of select="name"/>
                </td>
                <td>
                    <xsl:value-of select="length"/>
                </td>
                <td>
                    <xsl:value-of select="actors"/>
                </td>
                <td>
                    <xsl:value-of select="directors"/>
                </td>
                <td>
                    <xsl:value-of select="year"/>
                </td>
                <td>
                    <xsl:value-of select="rating"/>
                </td>
            </tr>
            </xsl:for-each>
        </table>
    </xsl:template>
</xsl:stylesheet>