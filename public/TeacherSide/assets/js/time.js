document.querySelectorAll('.submission-time').forEach(el => {
  const timestamp = new Date(el.dataset.timestamp);
  const now = new Date();
  const diffMs = now - timestamp;
  const diffHrs = Math.floor(diffMs / (1000 * 60 * 60));
  
  if (diffHrs < 24) {
    el.textContent = `${diffHrs}h ago`;
  }
});