using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations.Schema;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;
using System.Data.Entity;

namespace sdop.Models
{
    public class Prescription
    {
        [Key]
        [Required]
        public string Barcode { get; set; }

        [StringLength(10)]
        public string DiseaseCode { get; set; }

        [StringLength(200)]
        public string DiseaseName { get; set; }

        [StringLength(100)]
        public string DiseaseType { get; set; }

        [MaxLength(1000)]
        public string Description { get; set; }

        [Display(Name = "Expiration Date")]
        [DataType(DataType.Date)]
        [DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
        public DateTime DateOfPrescription { get; set; }

        [Display(Name = "Expiration Date")]
        [DataType(DataType.Date)]
        [DisplayFormat(DataFormatString = "{0:yyyy-MM-dd}", ApplyFormatInEditMode = true)]
        public DateTime ExpirationDate { get; set; }

        [StringLength(100)]
        public string PrescriptionType { get; set; }

        [Range(0,100)]
        public int TimesRepeated { get; set; }

        public ICollection<Patient> Patients { get; set; } // history relationship

        public ICollection<Doctor> Doctors { get; set; } // prescribe relationship

        public Drug Drug { get; set; } // contains relationship
    }
    public class PrescriptionDBContext : DbContext
    {
        public DbSet<Prescription> Prescriptions { get; set; }
    }
}
