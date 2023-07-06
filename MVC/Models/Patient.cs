using System;
using System.Data.Entity;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations.Schema;

namespace sdop.Models
{
    public class Patient
    {
        public int Id { get; set; }

        [Key]
        [Required]
        [Range(0,99999999999)]
        public long PatientSSN { get; set; }

        [Required]
        [StringLength(50)]
        public string PatientFirstName { get; set; }

        [Required]
        [StringLength(50)]
        public string PatientLastName { get; set; }

        [Range(0, 150)]
        public int PatientAge { get; set; }

        [Range(0,1)]
        public int PatientGender { get; set; }

        [Range(0,9999999999)]
        public long PatientPhoneNumber { get; set; }

        [StringLength(250)]
        public string PatientEmail { get; set; }

        public ICollection<Doctor> Doctors { get; set; } //goto relationship

        public ICollection<Prescription> Prescriptions { get; set; } //history relationship

    }
    public class PatientDBContext : DbContext
    {
        public DbSet<Patient> Patients { get; set; }
    }
}
