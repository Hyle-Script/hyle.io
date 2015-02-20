## Using a good text editor

Although Hyle's UI provides a textarea, it is mainly for pasting purposes. Tabulations, which are very important when using Hyle, are not supported in the After Effects textarea. Therefore, it is strongly recommended to use an external text editor such as [Sublime Text](http://www.sublimetext.com/) or just a basic notepad app. Also, Hyle will support any kind of tabulations but the recommended settings are: 

- Indentation style: space
- Indentation size: 2


## Understanding the syntax

Hyle syntax was designed to be as simple and readable as possible. It is based on an existing data-oriented language called YAML [(wikipedia/yaml)](http://en.wikipedia.org/wiki/Yaml). Here are the basic features you will need to know to get started with Hyle.

**Property and value relationships** are defined by the use of a colon (`:`).

    property: value

**Arrays** are defined by the use of one or many dash(es) (`-`).

    array of string values:
      - first value
      - second value

**Hierarchy** is defined by indentation.
    
    parent:
      child:
        property: value

**Multiple lines string** requires to be prefixed by a pipe (`|`).

    property: |
      This is a long 
      multiline string.

**Comments** are defined by a sharp sign (`#`).

    # comment about the following property
    property: value

Here's a more practical example: 

    # Tyler Durden's character definition

    - first name: Tyler 
      last name: Durden
      professional experiences: 
        - Soap Maker
        - Projectionist
        - Waiter
      favorite quote: |
        Without pain, without sacrifice, we would have nothing. 
        Like the first monkey shot into space.
