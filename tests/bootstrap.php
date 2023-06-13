<?xml version="1.0"?>
<info xmlns:xsi= "http://www.w3.org/2001/XMLSchema-instance"
      xsi:noNamespaceSchemaLocation="https://apps.nextcloud.com/schema/apps/info.xsd">
    <!--
    SPDX-FileCopyrightText: Daphne Test <test@gmail.com>
    SPDX-License-Identifier: CC0-1.0
    -->
    <id>notebook</id>
    <name>Note Book</name>
    <summary>another notes app</summary>
    <description><![CDATA[hello notes]]></description>
    <version>0.0.5</version>
    <licence>agpl</licence>
    <author mail="test@gmail.com" >Daphne Test</author>
    <namespace>NoteBook</namespace>
    <category>office</category>
    <bugs>https://test.com</bugs>
    <dependencies>
        <nextcloud min-version="25" max-version="28"/>
    </dependencies>
    <navigations>
        <navigation>
            <name>Note Book</name>
            <route>notebook.page.index</route>
        </navigation>
    </navigations>
</info>
