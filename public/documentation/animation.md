## Animation

### Keyframes

The `keyframes` keyword allows to define an array of keyframes by defining `time` and `value`. [See all keyframes properties](/docs/commands-list#keyframes).

    transform:
      opacity:
        keyframes: 
          - time: 1
            value: 0
          - time: 5
            value: 100
            easing: in

The `easing` property will help you define the easing you on each of your keyframes. [See all keyframe easing types](/docs/commands-list#keyframe-easing).

    keyframes:
      - time: 1
        value: 0
        easing: out
      - time: 2
        value: 10
        easing: easy
      - time: 3
        value: 20
        easing: in

Suffix your time value with `f`, `frame` or `frames` to use a frame input instead of time input.

    compositions:
      - name: My Composition
        duration: 120 frames
        layers:
          - in point: 20 f
            out point: 60 f


### Expressions

The `expression` keyword will allow you to specify expressions.

    transform:
      scale:
        expression: time

It can be used alongside `value` and `keyframes` as well.

    scale:
      expression: loopOut("pingpong")
      keyframes: 
        - time: 0
          value: [0, 100]
        - time: 1
          value: [100, 100]

To use multiline expression, put the character `|` on the first line.

    position:
      expression: |
        fps=5;
        amount=50;
        wiggle(fps,amount,octaves = 1, amp_mult = 0.5,(Math.round(time*fps))/fps);

If your expression or if your expressions start with `#` or `[`, you will need to put your expression between simple quotes `'`.

    position:
      expression: '[thisComp.layer("# Sequence").scale[0], 100]'
