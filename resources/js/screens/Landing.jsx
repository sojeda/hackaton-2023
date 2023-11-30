import React from "react";
import {
  AcademicCapIcon,
  BellIcon,
  BuildingLibraryIcon,
  FaceSmileIcon,
  QuestionMarkCircleIcon,
  UserGroupIcon,
} from "@heroicons/react/24/outline";

import logo from "../../../public/assets/logo.png";
import photo1 from "../../../public/assets/photo1.png";
import photo2 from "../../../public/assets/photo2.png";
import photo3 from "../../../public/assets/photo3.png";
import photo4 from "../../../public/assets/photo4.png";

export default function Landing() {
  return (
    <>
      <main>
        <div
          className="relative flex content-center items-center justify-center pb-32 pt-16"
          style={{
            minHeight: "75vh",
          }}
        >
          <div
            className="absolute top-0 h-full w-full bg-cover bg-center"
            style={{
              backgroundImage: `url(
              ${photo3}
              )`,
            }}
          >
            <span
              id="blackOverlay"
              className="absolute h-full w-full bg-gray-600 opacity-75"
            ></span>
          </div>
          <div className="container relative mx-auto">
            <div className="flex flex-wrap items-center">
              <div className="ml-auto mr-auto w-full px-4 text-center lg:w-6/12">
                <div className="flex justify-center pb-6">
                  <img src={logo} className="h-28 w-28" />
                </div>
                <div>
                  <h1 className="text-5xl font-semibold text-white">
                    B.L.I.S. - Blissful Labyrinth of Inner Serenity
                  </h1>
                  <p className="mt-4 text-lg text-gray-300">
                    Where you meet your inner serenity
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div
            className="pointer-events-none absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden"
            style={{ height: "70px" }}
          >
            <svg
              className="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                className="fill-current text-gray-300"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
        </div>

        <section className="-mt-24 bg-gray-300 pb-20">
          <div className="container mx-auto px-4">
            <div className="mt-20 flex flex-wrap items-center justify-center pt-14">
              <div className="ml-auto mr-auto w-full px-4 md:w-5/12">
                <h3 className="mb-2 text-3xl font-semibold leading-normal">
                  Welcome
                </h3>
                <p className="mb-4 mt-4 text-lg font-light leading-relaxed text-gray-700">
                  Welcome to B.L.I.S., your personal guide to emotional
                  well-being through the power of color psychology and AI.
                </p>
              </div>

              <div className="ml-auto mr-auto w-full px-4 md:w-4/12">
                <div className="relative mb-6 flex w-full min-w-0 flex-col break-words rounded-lg bg-pink-600 shadow-lg">
                  <img
                    src={photo1}
                    className="h-80 w-full rounded-t-lg align-middle"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>

        <section className="relative py-20">
          <div
            className="pointer-events-none absolute bottom-auto left-0 right-0 top-0 -mt-20 w-full overflow-hidden"
            style={{ height: "80px" }}
          >
            <svg
              className="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                className="fill-current text-white"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>

          <div className="container mx-auto px-4">
            <div className="flex flex-wrap items-center">
              <div className="ml-auto mr-auto w-full px-4 md:w-4/12">
                <img
                  className="h-80 max-w-full rounded-lg shadow-lg"
                  src={photo2}
                />
              </div>
              <div className="ml-auto mr-auto w-full px-4 md:w-5/12">
                <div className="md:pr-12">
                  <h3 className="text-3xl font-semibold">
                    Daily Emotional Tracking
                  </h3>
                  <p className="mt-4 text-lg leading-relaxed text-gray-600">
                    Effortlessly track your emotions with AI-generated images,
                    understanding your mental landscape every day.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div className="bg-gray-300 p-10">
          <h1 className="mb-10 text-center text-3xl font-semibold">Channels</h1>

          <div className="flex flex-wrap">
            <div className="w-full px-4 pt-6 text-center md:w-4/12 lg:pt-12">
              <div className="relative mb-8 flex w-full min-w-0 flex-col break-words rounded-lg bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                <div className="flex-auto px-4 py-5">
                  <div className="flex justify-center p-2 pb-4">
                    <AcademicCapIcon className="h-10 w-10" />
                  </div>
                  <h6 className="text-xl font-semibold">
                    Universities / Colleges
                  </h6>
                  <p className="mb-4 mt-2 text-gray-600">
                    Empower students with emotional resilience and
                    self-awareness for academic success.
                  </p>
                </div>
              </div>
            </div>

            <div className="w-full px-4 text-center md:w-4/12">
              <div className="relative mb-8 flex w-full min-w-0 flex-col break-words rounded-lg bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                <div className="flex-auto px-4 py-5">
                  <div className="flex justify-center p-2 pb-4">
                    <UserGroupIcon className="h-10 w-10" />
                  </div>
                  <h6 className="text-xl font-semibold">Employers</h6>
                  <p className="mb-4 mt-2 text-gray-600">
                    Boost workplace well-being by offering B.L.I.S. as a
                    valuable employee benefit.
                  </p>
                </div>
              </div>
            </div>

            <div className="w-full px-4 pt-6 text-center md:w-4/12">
              <div className="relative mb-8 flex w-full min-w-0 flex-col break-words rounded-lg bg-white shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                <div className="flex-auto px-4 py-5">
                  <div className="flex justify-center p-2 pb-4">
                    <BuildingLibraryIcon className="h-10 w-10" />
                  </div>
                  <h6 className="text-xl font-semibold">Mental Institutions</h6>
                  <p className="mb-4 mt-2 text-gray-600">
                    Our network of psychologists is ready to provide timely
                    support
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section className="pb-10 pt-20">
          <div className="container mx-auto px-4">
            <div className="mb-24 flex flex-wrap justify-center text-center">
              <div className="w-full px-4 lg:w-6/12">
                <h2 className="text-4xl font-semibold">Share Your Mood</h2>
                <p className="m-4 text-lg leading-relaxed text-gray-600">
                  Connect with friends and colleagues. Receive their support
                  when you need it most!
                </p>
              </div>
            </div>
          </div>
        </section>

        <section className="flex flex-row justify-around pb-20">
          <div className="flex h-96 w-72 flex-col rounded-md p-12 pb-0 text-center shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <h1 className="text-xl font-semibold">Basic Plan</h1>

            <p className="text-5xl">2$</p>
            <p className="pb-3 text-sm font-semibold">Every Month</p>

            <ul className="text-left text-gray-500">
              <li>Daily emotion tracking</li>
              <li>Smart Recommendations</li>
              <li>Limited sharing (1 friend)</li>
            </ul>

            <div className="flex h-full items-end justify-center pb-7">
              <button className="mt-4 rounded border border-blue-500 bg-transparent px-4 py-2 font-semibold text-blue-700 hover:border-transparent hover:bg-blue-500 hover:text-white">
                Subscribe Now
              </button>
            </div>
          </div>

          <div className="flex h-96 w-72 flex-col rounded-md p-12 pb-0 text-center shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <h1 className="text-xl font-semibold">Harmony Plan</h1>

            <p className="text-5xl">10$</p>
            <p className="pb-3 text-sm font-semibold">Every Month</p>

            <ul className="text-left text-gray-500">
              <li>Share with unlimited friends</li>
              <li>iWatch integration</li>
              <li>Popup intelligent notifications</li>
            </ul>

            <div className="flex h-full items-end justify-center pb-7">
              <button className="mt-4 rounded border border-blue-500 bg-transparent px-4 py-2 font-semibold text-blue-700 hover:border-transparent hover:bg-blue-500 hover:text-white">
                Subscribe Now
              </button>
            </div>
          </div>

          <div className="flex h-96 w-72 flex-col rounded-md p-12 pb-0 text-center shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <h1 className="text-xl font-semibold">Advanced Plan</h1>

            <p className="text-5xl">Custom</p>
            <p className="pb-3 text-sm font-semibold">Every Month</p>

            <ul className="text-left text-gray-500">
              <li>Everything in Harmony plus:</li>
              <li>Regular sessions with a psychologist partner</li>
            </ul>

            <div className="flex h-full items-end justify-center pb-7">
              <button className="mt-4 rounded border border-blue-500 bg-transparent px-4 py-2 font-semibold text-blue-700 hover:border-transparent hover:bg-blue-500 hover:text-white">
                Subscribe Now
              </button>
            </div>
          </div>
        </section>

        <section className="relative block bg-gray-900 pb-20">
          <div
            className="pointer-events-none absolute bottom-auto left-0 right-0 top-0 -mt-20 w-full overflow-hidden"
            style={{ height: "80px" }}
          >
            <svg
              className="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                className="fill-current text-gray-900"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>

          <div className="container mx-auto lg:pb-28 lg:pt-24">
            <div className="mt-12 flex flex-wrap justify-center">
              <div className="w-full px-4 text-center lg:w-3/12">
                <div className="flex justify-center">
                  <BellIcon className="h-8 w-8 text-white" />
                </div>
                <h6 className="mt-5 text-xl font-semibold text-white">
                  Smart Notifications
                </h6>
                <p className="mb-4 mt-2 pt-3 text-gray-500">
                  Receive personalized check-ins based on your iWatch signals,
                  prompting emotional reflection and self-awareness.
                </p>
              </div>
              <div className="w-full px-4 text-center lg:w-3/12">
                <div className="flex justify-center">
                  <QuestionMarkCircleIcon className="h-8 w-8 text-white" />
                </div>
                <h5 className="mt-5 text-xl font-semibold text-white">
                  Tailored Content Suggestions
                </h5>
                <p className="mb-4 mt-2 pt-3 text-gray-500">
                  Get recommendations to stay-in the mood or transition to an
                  optimal state of mind.
                </p>
              </div>
              <div className="w-full px-4 text-center lg:w-3/12">
                <div className="flex justify-center">
                  <FaceSmileIcon className="h-8 w-8 text-white" />
                </div>
                <h5 className="mt-5 text-xl font-semibold text-white">
                  Enhance Emotional Wellness
                </h5>
                <p className="mb-4 mt-2 pt-3 text-gray-500">
                  B.L.I.S. guides you towards emotional balance, fostering a
                  happier, healthier life.
                </p>
              </div>
            </div>
          </div>
        </section>
        <div className="mb-20 bg-white pt-10 text-center">
          <h1 className="pb-5 text-4xl font-semibold">
            Start Your Journey to Inner Serenity Today!
          </h1>

          <p className="tex-lg">
            Encourage users to download the app or sign up for early access.
          </p>
        </div>
      </main>
    </>
  );
}
