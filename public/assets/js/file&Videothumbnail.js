document.addEventListener("DOMContentLoaded", () => {
      // =============== VIDEO UPLOAD SETUP ===============
      const dropZone2 = document.getElementById("dropZone2");
      const videoInput = document.getElementById("videoInput");
      const videoPreview = document.getElementById("videoPreview");
      const previewVideo = document.getElementById("previewVideo");
      const playPauseBtn = document.getElementById("playPauseBtn");

      // =============== FILE UPLOAD SETUP ===============
      const dropZone = document.getElementById("dropZone");
      const fileInput = document.getElementById("fileInput");
      const fileNameDisplay = document.getElementById("fileNameDisplay");
      const fileName = document.getElementById("fileName");
      const fileSize = document.getElementById("fileSize");

      // Safety check: exit if any element is missing
      if (!dropZone2 || !videoInput || !videoPreview || !previewVideo || !playPauseBtn ||
          !dropZone || !fileInput || !fileNameDisplay || !fileName || !fileSize) {
        console.warn("Some elements not found. Skipping initialization.");
        return;
      }

      // =============== VIDEO: Play/Pause ===============
      playPauseBtn.addEventListener("click", () => {
        if (previewVideo.paused) {
          previewVideo.play();
          playPauseBtn.textContent = "Pause";
        } else {
          previewVideo.pause();
          playPauseBtn.textContent = "Play";
        }
      });

      // =============== VIDEO: Handle Upload ===============
      function handleVideo(file) {
        if (!file.type.startsWith("video/")) {
          alert("Please upload a valid video file (MP4, MOV, WEBM)");
          return;
        }
        if (file.size > 100 * 1024 * 1024) {
          alert("File too large. Maximum size: 100MB");
          return;
        }

        const url = URL.createObjectURL(file);
        previewVideo.src = url;
        videoPreview.style.display = "block";

        const title = file.name.replace(/\.[^/.]+$/, "");
        document.getElementById("file-title-2").value = title;
      }

      // =============== FILE: Format Size ===============
      function formatFileSize(bytes) {
        if (bytes === 0) return "0 Bytes";
        const k = 1024;
        const sizes = ["Bytes", "KB", "MB", "GB"];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + " " + sizes[i];
      }

      // =============== FILE: Clear Info ===============
      function clearFileInfo() {
        fileNameDisplay.style.display = "none";
        fileName.textContent = "";
        fileSize.textContent = "";
      }

      // =============== FILE: Handle Upload ===============
      fileInput.addEventListener("change", function () {
        const file = this.files[0];
        if (!file) return clearFileInfo();

        const ext = file.name.toLowerCase().split(".").pop();
        const allowed = ["pdf", "ppt", "pptx"];
        if (!allowed.includes(ext)) {
          alert("Please upload a valid file: PDF, PPT, or PPTX");
          return clearFileInfo();
        }
        if (file.size > 100 * 1024 * 1024) {
          alert("File too large. Maximum size: 100MB");
          return clearFileInfo();
        }

        fileName.textContent = file.name;
        fileSize.textContent = formatFileSize(file.size);
        fileNameDisplay.style.display = "block";

        document.getElementById("file-title").value = file.name.replace(/\.[^/.]+$/, "");
      });

      // =============== VIDEO: File Input Change ===============
      videoInput.addEventListener("change", function () {
        if (this.files.length > 0) {
          handleVideo(this.files[0]);
        }
      });

      // =============== SHARED: Drag & Drop Logic ===============
      // Video Drop Zone
      dropZone2.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone2.classList.add("active");
      });
      dropZone2.addEventListener("dragleave", () => {
        dropZone2.classList.remove("active");
      });
      dropZone2.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone2.classList.remove("active");
        if (e.dataTransfer.files.length > 0) {
          videoInput.files = e.dataTransfer.files;
          handleVideo(e.dataTransfer.files[0]);
        }
      });

      // File Drop Zone
      dropZone.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropZone.classList.add("active");
      });
      dropZone.addEventListener("dragleave", () => {
        dropZone.classList.remove("active");
      });
      dropZone.addEventListener("drop", (e) => {
        e.preventDefault();
        dropZone.classList.remove("active");
        if (e.dataTransfer.files.length > 0) {
          fileInput.files = e.dataTransfer.files;
          fileInput.dispatchEvent(new Event("change"));
        }
      });

      // =============== INIT ===============
      videoPreview.style.display = "none";
    });