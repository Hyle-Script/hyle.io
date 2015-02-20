## Introduction

Hyle is a new tool that allows you to automate tasks in After Effects quickly and easily. By using a simple and understandable text syntax you will be able to generate and affect content in an efficient and reusable way. Hyle will read through the file or text you feed it and generate content accordingly.


<div class="flex-video widescreen">
  <iframe src="https://www.youtube.com/embed/UyfU0DFtMuY?rel=0&vq=hd720" frameborder="0" allowfullscreen="">
  </iframe>
</div>

## Installation

Installing Hyle is just as staightforward as installing any other After Effects script.

1. Copy `Hyle.jsxbin` in your After Effects scripts folder.
  - Windows: `Program Files\Adobe\Adobe After Effects <version>\Support Files\Script UI Panels`
  - OS X: `/Applications/Adobe After Effects <version>/Scripts/ScriptUI Panels`
2. In After Effects general preferences check *Allow Scripts to Write Files and Access Network*

## Compatibility

**Hyle currently only works with english versions of After Effects CS5.5 and higher**. 

If your After Effects is in another language than english, you can still use Hyle by using this simple technique.

1. Close After Effects.
2. Create a empty file named `ae_force_english.txt` in your documents folder.
  - Windows: `C:/Users/[username]/My documents`
  - OS X: `/Users/[username]/Documents` 
3. Open After Effects and it should be in english.

<div class="visible-print">

<h2>Quick Example</h2>

<p>Here's a little snippet to give you a quick taste of Hyle's power.</p>

<pre>folders:
    - Hyle Demo
    - | compositions
  compositions:
    - name: Hyle Demo
      folder: compositions
      layers:
        - type: camera
          transform:
            point of interest:
              expression: transform.position
            position:
              expression: "[thisComp.width/2, thisComp.height/2, value[2]]"
              keyframes: 
                - time: 0
                  value: [0, 0, -1700]
                - time: 2
                  value: [0, 0, -1800]
        - type: light
          name: main light
          transform: 
            position: [640, 345, -655]
          options:
            type: point
            color: f4e7e7
        - type: text
          3d: true
          text: Welcome To Hyle's Demo
          font size: 90
        - type: solid
          3d: true
          color: 3a388d
          width: 2000
          height: 1000</pre>
</div>