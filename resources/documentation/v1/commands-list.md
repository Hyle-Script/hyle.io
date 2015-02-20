## Commands list

The language used here will assume you have read the preceding sections of the documentation.

This section defines Hyle's available properties.

### Folder

Property          | Type          | Default
----------------  | ------------- | ------------------- 
name              | string        | null
comment           | string        | null
label             | string        | null
 
### Composition

Property          | Type          | Default
----------------  | ------------- | ------------------- 
name              | string        | null
folder            | string        | null
comment           | string        | null
selected          | bool          | false
label             | string        | null
id                | int or string | null
width             | int           | 1280
height            | int           | 720
pixel aspect      | int           | 1
duration          | int           | 10
frame rate        | int           | 24
color             | string        | 000000
[layers](#layers) | array         | null

### Layer

Property                        | Type    | Default
---------------                 | ------- | ------------------- 
[type](#layer-types)            | string  | solid
parent                          | id      | null
start time                      | int     | 0
time                            | int     | 0
in point                        | int     | 0
out point                       | int     | 10
motion blur                     | boolean | false
3d                              | boolean | false
adjustment                      | boolean | false
solo                            | boolean | false
guide                           | boolean | false
locked                          | boolean | false
[blending mode](#blending-modes)| string  | normal
[track matte](#track-mattes)    | string  | no track matte

### Layer Types

- solid
- adjustment
- null
- light
- camera
- text

### Track Mattes

- alpha 
- alpha inverted 
- luma 
- luma inverted 
- no track matte 

### Blending Modes
<div class="row">
  <div class="col-sm-3 col-md-3 col-lg-3">
    <ul class="list-unstyled">
      <li>add</li>
      <li>alpha add</li>
      <li>classic color burn</li>
      <li>classic color dodge</li>
      <li>classic difference</li>
      <li>color</li>
      <li>color burn</li>
      <li>color dodge</li>
      <li>dancing dissolve</li>
      <li>darken</li>
      <li>darker color</li>
      <li>difference</li>
    </ul>
  </div>
  <div class="col-sm-3 col-md-3 col-lg-3">
    <ul class="list-unstyled">
      <li>dissolve</li>
      <li>exclusion</li>
      <li>hard light</li>
      <li>hard mix</li>
      <li>hue</li>
      <li>lighten</li>
      <li>lighter color</li>
      <li>linear burn</li>
      <li>linear dodge</li>
      <li>linear light</li>
      <li>luminescent premul</li>
      <li>luminosity</li>
    </ul>
  </div>
  <div class="col-sm-3 col-md-3 col-lg-3">
    <ul class="list-unstyled">
      <li>multiply</li>
      <li>normal</li>
      <li>overlay</li>
      <li>pin light</li>
      <li>saturation</li>
      <li>screen</li>
      <li>silhouete alpha</li>
      <li>silhouette luma</li>
      <li>soft light</li>
      <li>stencil alpha</li>
      <li>stencil luma</li>
      <li>vivid light</li>
    </ul>
  </div>
</div>

### Layer Styles

- drop shadow
- inner shadow
- outer glow
- inner glow
- bevel and emboss
- satin
- color overlay
- gradient overlay
- stroke

### Transform

Property                | Type    | Default
---------------         | ------- | ------------------- 
anchor point            | array   | null
position                | array   | null
scale                   | array   | null
orientation             | array   | null
x rotation              | int     | null
y rotation              | int     | null
z rotation              | int     | null
opacity                 | int     | null

### Camera Options

Property                | Type    | Default
------------------------| ------- | ------------------- 
zoom                    | int     | 1777.8
depth of field          | boolean | false
focus distance          | int     | 1777.8
aperture                | int     | 25.3
blur level              | int     | 100
iris shape              | int     | 1
iris rotation           | int     | 0
iris roundness          | int     | 0
iris aspect ratio       | int     | 1
iris diffraction fringe | int     | 0
highlight gain          | int     | 0
highlight threshold     | int     | 255
highlight saturation    | int     | 0

### Light Options

Property                | Type    | Default
------------------------| ------- | ------------------- 
type                    | string  | point
intensity               | int     | 100
color                   | int     | ffffff
falloff                 | int     | 1
radius                  | int     | 500
falloff distance        | int     | 500
cast shadows            | int     | false
shadow darkness         | int     | 100
shadow diffusion        | int     | 0

### Light types

- parallel
- spot
- point
- ambient

### Text Layer

Property                                | Type        | Default
--------------------------------------- | ----------- | -----------
font size                               | int         | 36
font color                              | array       | ffffff
stroke color                            | array       | 000000
stroke width                            | array       | 0
font                                    | string      | Helvetica
stroke over fill                        | bool        | false
apply stroke                            | bool        | false
apply fill                              | bool        | true
[justification](#justification-types)   | string      | center
tracking                                | int         | 0

### Justification Types

- left
- right
- center

### Easing Types

- in
- easy
- out

### Mask

Property       | Type    | Default
-------------- | ------- | -----------
feather        | array   | null
opacity        | int     | 0
inverted       | boolean | false
expansion      | int     | 0
path           | object  | null


### Mask path

Property                 | Type    | Default
------------------------ | ------- | -----------
[type](#mask-path-types) | string  | null
width                    | int     | null
height                   | int     | null
position                 | array   | null

### Mask path types

- Ellipse
- Rectangle