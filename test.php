<!DOCTYPE html>

<head>
    <title>WebGL</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Third Party -->
    <script src="third-party/gl-matrix-min.js"></script>
    <script src="third-party/perlin.js"></script>

    <!-- Perlin -->
    <script src="libnoise-js/noise-util.js"></script>
    <script src="libnoise-js/perlin.js"></script>

    <!-- Engine -->
    <script src="engine/engine.js"></script>
    <script src="engine/utility.js"></script>
    <script src="engine/rendering.js"></script>
    <script src="engine/input.js"></script>
    <script src="engine/editor.js"></script>
    <script src="engine/voxel.js"></script>

    <!-- Assets -->
    <script src="shaders/_shaders.js"></script>
    <script src="models/_models.js"></script>

    <!-- Scripts -->
    <script src="scripts/camera_controller.js"></script>

    <!-- Game -->
    <!-- <script src="gl.js"></script> -->
    <!-- <script src="game.js"></script> -->
    <script src="voxel-game.js"></script>
</head>

<body>
    <div id="editor">
        <div>
            <canvas id="glCanvas" tabindex="1" width="1280" height="720"></canvas>
            <?php echo "Hello, World!"; ?>
        </div>
    </div>
</body>