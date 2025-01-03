<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/students">
    <html>
    <body>
        <h2>Student List</h2>
        <table border="1">
            <tr>
            <th>Name</th>
            <th>USN</th>
            <th>SEM</th>
            </tr>

            <xsl:for-each select="student">
                <tr>
                    <td><xsl:value-of select="name" /></td>
                    <td><xsl:value-of select="usn" /></td>
                    <td><xsl:value-of select="sem" /></td>
                </tr>
            </xsl:for-each>
        </table> 
    </body>
    </html>
</xsl:template>
</xsl:stylesheet> 