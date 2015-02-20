## Layers

The keywork `compositions` will allow you to define an array of compositions and then nest layers in it. [See all layers properties](/docs/commands-list#layer).

    compositions:
      - name: The composition
        layers:
          - name: The layer's name
            type: solid
            width: 1280
            height: 720
            color: [0, 0, 0]
            duration: 10

Notice the `type` property. This is what will tell Hyle what kind of layer to create. [See all layers types](/docs/commands-list#layer-types).

<hr class="small">

As with compositions, the parent composition may alternatively be pointed out by using the `composition` property. 

    compositions: 
      - name: The composition
    layers: 
      - name: The layer’s name
        composition: The composition


### Track mattes

The `track matte` property will allow you to define the layer´s track matte. [See all track mattes](/docs/commands-list#track-mattes).

    layers:
      - name: Luma Layer
        track matte: luma

### Blending Modes

The `blending mode` property will help you define the layer blending mode. [See all blending modes](/docs/commands-list#blending-modes).

    layers:
      - name: Multiply Layer
        blending mode: multiply

### Layer Styles

The `styles` property will allow you to define layer styles. [See all layer styles](/docs/commands-list#layer-styles)

    layer:
      - name: Styled Layer
        styles:
          - type: outer glow
            opacity: 50
          - type: stroke
            color: ff0000

### Masks

The `masks` property will define and apply masks to your current layer. [See all masks properties](/docs/commands-list#masks).

    layers:
        - name: Masked Layer
          masks:
            - inverted: true
              name: My mask
              feather: [10, 10]
              opacity: 50
              expansion: 20
              path:
                type: ellipse
                width: 1280
                height: 720
                position: [0, 0]

Instead of having to manually input every point coordinates, the `type` helper is provided and will automatically calculate the points positions and the points curves as After Effects would. [See all masks path types](/docs/commands-list#masks-path-types).

### Shapes

The `contents` property will allow you to define what you want in your shape layer. [See all shapes properties](/docs/commands-list#shapes).

    layers:
      - type: shape
        contents:
          - type: rectangle
            size: [200, 100]
            roundness: 5

<hr class="small">

Shape groups can also be created and nested by using the `contents` property and using the type `group`.

    layers:
      - type: shape
        contents:
          - type: group
            name: Polystar group
            contents:
              - type: polystar
                points: 3
                outer radius: 200

<hr class="small">

The `type` property allows you to defined not only shapes but also graphics and filters. [See all shape related types](/docs/commands-list#shapes).

    layers:
      - type: shape
        contents:
          - type: rectangle
            size: [50, 50]
          - type: repeater
            copies: 3
          - type: fill
            color: ffffff
