<style>
    .gradient {
        background-image: linear-gradient(45deg, #00A896 100%, #E9295C 35%);
    }
</style>

<div class="gradient text-white min-h-screen flex items-center">
    <div class="container mx-auto p-4 flex flex-wrap items-center">
        <div class="w-full md:w-5/12 text-center p-4">
            <img src="<?= $data['baseUrl']; ?>/assets/image/<?= $data['errMsg']["code"]; ?>.svg" alt="Not Found" />
        </div>
        <div class="w-full md:w-7/12 text-center md:text-left p-4">
            <div class="text-6xl font-medium"><?= $data['errMsg']["code"]; ?></div>
            <?= $data['errMsg']["msg"]; ?>
            <a href="<?= $data['baseUrl']; ?>/" class="border border-white rounded p-4">Kembali</a>
        </div>
    </div>
</div>