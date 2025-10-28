<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Survey System Breakdown</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
  <div class="container">
    <h2 class="mb-4">Upload Survey Questions</h2>

    <!-- Search & Preview -->
    <div class="mb-3">
      <input type="text" id="searchFile" class="form-control" placeholder="Enter file name (e.g. questions.txt)">
      <button class="btn btn-secondary mt-2" id="searchBtn">Search & Preview</button>
    </div>
    <pre id="searchPreview" class="bg-white p-3 border rounded"></pre>

    <!-- Upload & Preview -->
    <div class="mb-3">
      <input type="file" id="surveyFile" accept=".csv,.json,.txt" class="form-control">
    </div>
    <div class="d-grid gap-2 mb-3">
      <button class="btn btn-info" id="previewBtn">Preview</button>
      <button class="btn btn-primary" name="submit">Submit</button>
    </div>
    <h5>Preview:</h5>
    <pre id="preview" class="bg-white p-3 border rounded"></pre>
  </div>

  <script>
    let uploadedFile = null;

    // Store file on selection
    document.getElementById('surveyFile').addEventListener('change', function (e) {
      uploadedFile = e.target.files[0];
    });

    // Manual preview
    document.getElementById('previewBtn').addEventListener('click', function () {
      if (!uploadedFile) {
        alert("Please select a file first.");
        return;
      }

      const reader = new FileReader();
      reader.onload = function () {
        document.getElementById('preview').textContent = reader.result;
      };
      reader.readAsText(uploadedFile);
    });

    // Search & Preview from uploads folder
    document.getElementById('searchBtn').addEventListener('click', function () {
      const fileName = document.getElementById('searchFile').value.trim();
      if (!fileName) return alert("Please enter a file name.");

      fetch(`uploads/${fileName}`)
        .then(res => {
          if (!res.ok) throw new Error("File not found");
          return res.text();
        })
        .then(data => {
          document.getElementById('searchPreview').textContent = data;
        })
        .catch(() => {
          document.getElementById('searchPreview').textContent = "File not found.";
        });
    });

    // Submit file to PHP
    document.querySelector('[name="submit"]').addEventListener('click', function () {
      if (!uploadedFile) {
        alert("Please upload a file before submitting.");
        return;
      }

      const formData = new FormData();
      formData.append('surveyFile', uploadedFile);

      fetch('submit-survey.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.ok ? alert("File submitted successfully!") : alert("Submission failed."))
      .catch(() => alert("Error submitting file."));
    });
  </script>
</body>
</html>