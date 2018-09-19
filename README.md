MetaMagik Kanboard Plugin (Beta)
==========================

Forked from [Metadata Plugin](https://github.com/BlueTeck/kanboard_plugin_metadata) and added functionality ontop of previous plugin, **there is no need to use both plugins**

1. This plugin uses Metadata to create Customizable Fields.

2. A settings panel, allows you to create fields.

3. Fields will show up when creating/modifying tasks.

4. Metadata is duplicated during task duplication.

5. Exporting tasks to CSV will include custom fields.

6. Metadata Sidebars for tasks, projects, and users to add remove metadata.

7. Filters for searching metadata.

Plugin for https://github.com/fguillot/kanboard

Author
------

- [Craig Crosby](https://github.com/creecros)
- Fork of [Metadata Plugin](https://github.com/BlueTeck/kanboard_plugin_metadata)
- License MIT

Installation
------------

- Decompress the archive in the `plugins` folder

or

- Create a folder **plugins/MetaMagik**
- Copy all files under this directory


Usage
------------

Settings>Metadata Types: panel for creating custom fields for tasks

![image](https://user-images.githubusercontent.com/26339368/45580649-c1f1fc00-b861-11e8-8f85-08ef52745fb2.png)

Fields setup in Settings will appear in the task creation panel:

![image](https://user-images.githubusercontent.com/26339368/45580679-f5348b00-b861-11e8-831c-2012424005c5.png)

Metadata will appear under Task Details in an Accordian:

![image](https://user-images.githubusercontent.com/26339368/45580726-79870e00-b862-11e8-88db-397d6cdff417.png)

Metadata will also show up as a tooltip on the Board:

![image](https://user-images.githubusercontent.com/26339368/45580741-a4716200-b862-11e8-92ab-1cd8d4783273.png)

There is also a sidebar menu to add/remove/edit metadata, which is not dependent on the fields setup in your settings, adding fields here will not add metadata fields during creation or modification to a task, only those in the settings panel will show up. This sidebar will appear for tasks, users, and projects:

![image](https://user-images.githubusercontent.com/26339368/45580785-15187e80-b863-11e8-8c04-94e05dc2e7f8.png)

During Task Modification, your custom fields will be pre-populated with yout data:

![image](https://user-images.githubusercontent.com/26339368/45580810-5c067400-b863-11e8-8c27-1e040d4974f5.png)

Perform searches for metadata fields. `metakey:"field"`

![image](https://user-images.githubusercontent.com/26339368/45580859-08e0f100-b864-11e8-8d96-bcb682398681.png)

Perform searches for metadata values. `metaval:"value"`

![image](https://user-images.githubusercontent.com/26339368/45580850-e51dab00-b863-11e8-96e3-c8ff832e70a2.png)

Export to CSV will include your custom fields and data during Task Export

![image](https://user-images.githubusercontent.com/26339368/45769838-c2e2af00-bc0e-11e8-95b6-34c23876f03f.png)

![image](https://user-images.githubusercontent.com/26339368/45769796-af374880-bc0e-11e8-9587-83ab717da733.png)


Credits
------------

* Original Metadata Plugin author: [BlueTeck](https://github.com/BlueTeck)
* Unused non working code in original code that greatly assisted in adding the settings panel: [Daniele Lenares](https://github.com/dnlnrs)
* Some guy who suckered me into writing this code, and provided the idea and desire: [Julien Buratto](https://github.com/TheCloud)




