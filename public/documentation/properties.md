## Properties

### Transform

The `transform` property will allow you to specify your layers transform. [See all transform properties](/docs/commands-list#transform).

    layers:
      - name: The layer
        type: solid
        transform:
          scale: [50, 100]
          opacity: 50

Hyle is selection-aware, so if no layers are specified in your code, eg.: 

    transform:
      position: [0, 0]

Hyle will apply your code to your currently selected layers.

### Effects

The `effects` property will allow you to specify an array of effects. [See all effects properties](/docs/commands-list#effects).

    effects:
      - type: gaussian blur
        name: My Gaussian Blur
        properties:
          blurriness: 50

The above snippet will apply gaussian blur and rename the effect “My Gaussian Blur” on the currently selected layers. 

<hr class="small">

You can also apply it while creating the layer.

    layers: 
      - type: solid
        name: Color Correction
        effects: 
          - type: levels
            properties:
              gamma: 2

### Options

The `options` property is important with **camera** and **light** layers which both have their specific options. [See all options properties](/docs/commands-list#options).

    layers:
      - type: camera
        options: 
          zoom: 1500
          depth of field: true
      - type: light
        options:
          intensity: 50