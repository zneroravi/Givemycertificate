const certificateData = {
  name: "Priyanshu Nishant",
  course: "How to be a Successful Business Analyst",
  issuedBy: "upGrad",
  issuedOn: "23-Oct-2023",
  eventStartDate: "01-Sep-2023",
  eventEndDate: "20-Oct-2023",
  expiryDate: "23-Oct-2026",
  skills: ["Python", "Data Science", "Teach"],
  imageUrl: "certificate-image.jpeg",
  issuer: {
      name: "MAYANK KUMAR",
      title: "Co-founder & MD",
      organization: "upGrad Education Private Limited",
      address: "Nishuvi, Ground floor - 75, Dr. Annie Besant Road, Worli, Mumbai - 400018"
  }
};

function handleDownload() {
  const link = document.createElement('a');
  link.href = certificateData.imageUrl;
  link.download = `${certificateData.name}-${certificateData.course}-Certificate.png`;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}

function handleAddToLinkedIn() {
  const linkedInShareUrl = `https://www.linkedin.com/profile/add?startTask=CERTIFICATION_NAME&name=${encodeURIComponent(certificateData.course)}&organizationName=${encodeURIComponent(certificateData.issuedBy)}&issueYear=${new Date(certificateData.issuedOn).getFullYear()}&issueMonth=${new Date(certificateData.issuedOn).getMonth() + 1}`;
  window.open(linkedInShareUrl, '_blank');
}


function handleShare() {
  if (navigator.share) {
      navigator.share({
          title: `${certificateData.name}'s ${certificateData.course} Certificate`,
          text: `Check out my certificate for ${certificateData.course} from ${certificateData.issuedBy}`,
          url: window.location.href,
      });
  } else {
      const shareUrl = window.location.href;
      navigator.clipboard.writeText(shareUrl);
      alert('Certificate link copied to clipboard!');
  }
}

// Add event listeners when the DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('download-btn').addEventListener('click', handleDownload);
  document.getElementById('linkedin-btn').addEventListener('click', handleAddToLinkedIn);
  document.getElementById('share-btn').addEventListener('click', handleShare);
});
