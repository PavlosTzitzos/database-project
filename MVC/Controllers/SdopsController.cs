using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using sdop.Models;

namespace sdop.Controllers
{
    public class SdopsController : Controller
    {
        private SdopDBContext db = new SdopDBContext();

        // GET: Sdops
        public ActionResult Index()
        {
            return View(db.Sdops.ToList());
        }

        // GET: Sdops/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Sdop sdop = db.Sdops.Find(id);
            if (sdop == null)
            {
                return HttpNotFound();
            }
            return View(sdop);
        }

        // GET: Sdops/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Sdops/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "SdopId,City,Range,SdopCapacity,SdopAddress,SdopDeliveryTimeH")] Sdop sdop)
        {
            if (ModelState.IsValid)
            {
                db.Sdops.Add(sdop);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(sdop);
        }

        // GET: Sdops/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Sdop sdop = db.Sdops.Find(id);
            if (sdop == null)
            {
                return HttpNotFound();
            }
            return View(sdop);
        }

        // POST: Sdops/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "SdopId,City,Range,SdopCapacity,SdopAddress,SdopDeliveryTimeH")] Sdop sdop)
        {
            if (ModelState.IsValid)
            {
                db.Entry(sdop).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(sdop);
        }

        // GET: Sdops/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Sdop sdop = db.Sdops.Find(id);
            if (sdop == null)
            {
                return HttpNotFound();
            }
            return View(sdop);
        }

        // POST: Sdops/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            Sdop sdop = db.Sdops.Find(id);
            db.Sdops.Remove(sdop);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
